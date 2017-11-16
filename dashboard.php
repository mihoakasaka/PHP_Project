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