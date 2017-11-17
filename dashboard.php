<?php

// Paypal
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

$app->get('/dashboard', function() use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }

    $adsList = array();
    if ($_SESSION['user']) {
        $adsList = DB::query("SELECT * FROM ads WHERE sellerId=%i && status != 'deleted'", $_SESSION['user']['id']);
    }

    $app->render('account/dashboard.html.twig', array('adsList' => $adsList));
});


/* Dashboard actions */

$app->post('/action/dashboard/:op(/:id)', function($op, $id = -1) use ($app, $log) {
    echo "Dashboard operation " . $op . " on id " . $id;

    $ad = NULL;

    // Is user logged in
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }

    // Does the ad exist 
    if ($id == -1) {
        http_response_code(404);
        $app->render('not_found.html.twig');
        return;
    } else {
        $ad = DB::queryFirstRow("SELECT * FROM ads WHERE sellerId=%i AND id=%i AND status != 'deleted'", $_SESSION['user']['id'], $id);
    }

    if (!$ad) {
        http_response_code(404);
        $app->render('not_found.html.twig');
        return;
    }

    // Is the action appropriate for the current state of the ad
    if (($op == 'activate' && $ad['status'] != 'created') || ($op == 'extend' && $ad['status'] != 'active') || ($op == 'reactivate' && $ad['status'] != 'expired')) {
        $log->err("Error: Action not appropriate for ad state. Operation " . $op . " for ad state " . $ad['status']);
        http_response_code(500);
        $app->render('internal_error.html.twig');

        die;
    }

    // All good, go to Paypal and collect $$
    echo "paypal is next";
    // Record transaction in DB ?
})->conditions(array(
    'op' => '(activate|extend|reactivate)',
    'id' => '\d+'
));


$app->get('/action/test', function() use ($app) {
    $app->render('account/admanagementmodalpanel.html.twig');
});

$app->get('/action/paypalreturn/:result', function($result = 'false') use ($app) {

    if ($result != 'true') {
        // FIXME handle failed payment
        echo "Payment failed";
        return;
    }
    $apiContext = new ApiContext(
            new OAuthTokenCredential(
            'AST8ISz1fcTihSG977bcrCixv0AKFq2CF5Fqkd5NY9EU2Csa6Z2bpIfxBUU4MO5dA4fFLG0x3EPJ7Y2Z', // ClientID
            'ELQlnyE9DiYiOnj8XjCDXcQ9uRlM11ZyODaOBM5v4DMArmezbVUXu2QuWh1xYZi26koEDjtVWcEghSd1'      // ClientSecret
            )
    );

    // Paypal logging
    $apiContext->setConfig(
            array(
                'log.LogEnabled' => true,
                'log.FileName' => 'logs/paypaldebug.log',
                'log.LogLevel' => 'DEBUG',
            )
    );



    // FIXME change access method and perform basic sanity check on value
    $paymentId = $_GET['paymentId'];
    $payment = Payment::get($paymentId, $apiContext);

    $execution = new PaymentExecution();
    $execution->setPayerId($_GET['PayerID']);

    try {

        $result = $payment->execute($execution, $apiContext);
        echo("Executed Payment" . "Payment" . $payment->getId() . $execution . $result);

        try {
            $payment = Payment::get($paymentId, $apiContext);
        } catch (Exception $ex) {
            echo("Get Payment" . "Payment" . $ex);
            return;
        }
    } catch (Exception $ex) {
        echo("Executed Payment" . "Payment" . $ex);
        return;
    }
    echo("Get Payment" . "Payment" . $payment->getId() . $payment);
});


$app->get('/action/testpaypal', function() use ($app) {



    $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
            'AST8ISz1fcTihSG977bcrCixv0AKFq2CF5Fqkd5NY9EU2Csa6Z2bpIfxBUU4MO5dA4fFLG0x3EPJ7Y2Z', // ClientID
            'ELQlnyE9DiYiOnj8XjCDXcQ9uRlM11ZyODaOBM5v4DMArmezbVUXu2QuWh1xYZi26koEDjtVWcEghSd1'      // ClientSecret
            )
    );

    // Paypal logging
    $apiContext->setConfig(
            array(
                'log.LogEnabled' => true,
                'log.FileName' => 'logs/paypaldebug.log',
                'log.LogLevel' => 'DEBUG',
            )
    );

    $payer = new Payer();
    $payer->setPaymentMethod('paypal');

    $item1 = new Item();
    $item1->setName('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku("123123") // Similar to `item_number` in Classic API
            ->setPrice(7.5);
    $item2 = new Item();
    $item2->setName('Granola bars')
            ->setCurrency('USD')
            ->setQuantity(5)
            ->setSku("321321") // Similar to `item_number` in Classic API
            ->setPrice(2);

    $itemList = new ItemList();
    $itemList->setItems(array($item1, $item2));

    $details = new Details();
    $details->setShipping(1.2)
            ->setTax(1.3)
            ->setSubtotal(17.50);

    $amount = new Amount();
    $amount->setCurrency("USD")
            ->setTotal(20)
            ->setDetails($details);

    $transaction = new Transaction();
    $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

    $baseUrl = $app->request()->getUrl();


    $redirectUrls = new RedirectUrls();
    $redirectUrls->setReturnUrl("$baseUrl/action/paypalreturn/true")
            ->setCancelUrl("$baseUrl/action/paypalreturn/false");


    $payment = new Payment();
    $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

    $request = clone $payment;
    try {
        $payment->create($apiContext);
        echo $payment;

        echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
        $app->redirect($payment->getApprovalLink());
    } catch (\PayPal\Exception\PayPalConnectionException $ex) {
        // This will print the detailed information on the exception.
        //REALLY HELPFUL FOR DEBUGGING
        echo $ex->getData();
    }
});

