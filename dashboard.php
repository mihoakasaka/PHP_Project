<?php

$app->get('/dashboard', function() use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }

    $adsList = array();
    if ($_SESSION['user']) {
        $adsList = DB::query("SELECT * FROM ads WHERE sellerId=3 && status NOT LIKE 'deleted'", $_SESSION['user']['id']);
    }

    $app->render('account/dashboard.html.twig', array('adsList' => $adsList));
});

/* AJAX dashboard actions */


$app->post('/dashboard/:op(/:id)', function($op, $id = -1) use ($app, $log) {
    echo "Dashboard operation " . $op . " on id " . $id;
})->conditions(array(
    'op' => '(activate|extend|renew|reactivate)',
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
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
            'AST8ISz1fcTihSG977bcrCixv0AKFq2CF5Fqkd5NY9EU2Csa6Z2bpIfxBUU4MO5dA4fFLG0x3EPJ7Y2Z', // ClientID
            'ELQlnyE9DiYiOnj8XjCDXcQ9uRlM11ZyODaOBM5v4DMArmezbVUXu2QuWh1xYZi26koEDjtVWcEghSd1'      // ClientSecret
            )
    );


    // FIXME change access method and perform basic sanity check on value
    $paymentId = $_GET['paymentId'];
    $payment = \PayPal\Api\Payment::get($paymentId, $apiContext);

$execution = new \PayPal\Api\PaymentExecution();
    $execution->setPayerId($_GET['PayerID']);
    
    try {

        $result = $payment->execute($execution, $apiContext);
        echo("Executed Payment" . "Payment" . $payment->getId() . $execution . $result);

        try {
            $payment = \PayPal\Api\Payment::get($paymentId, $apiContext);
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


    $payer = new \PayPal\Api\Payer();
    $payer->setPaymentMethod('paypal');

    $item1 = new \PayPal\Api\Item();
    $item1->setName('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku("123123") // Similar to `item_number` in Classic API
            ->setPrice(7.5);
    $item2 = new \PayPal\Api\Item();
    $item2->setName('Granola bars')
            ->setCurrency('USD')
            ->setQuantity(5)
            ->setSku("321321") // Similar to `item_number` in Classic API
            ->setPrice(2);

    $itemList = new \PayPal\Api\ItemList();
    $itemList->setItems(array($item1, $item2));

    $details = new \PayPal\Api\Details();
    $details->setShipping(1.2)
            ->setTax(1.3)
            ->setSubtotal(17.50);

    $amount = new \PayPal\Api\Amount();
    $amount->setCurrency("USD")
            ->setTotal(20)
            ->setDetails($details);

    $transaction = new \PayPal\Api\Transaction();
    $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

//$baseUrl = getBaseUrl();
    $redirectUrls = new \PayPal\Api\RedirectUrls();
    $redirectUrls->setReturnUrl("http://localhost:8006/action/paypalreturn/true")
            ->setCancelUrl("http://localhost:8006/action/paypalreturn/false");


    $payment = new \PayPal\Api\Payment();
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

