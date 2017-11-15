<?php

$app->get('/dashboard', function() use ($app) {
    $adsList = array();
    if ($_SESSION['user']) {
        $adsList = DB::query("SELECT * FROM ads WHERE sellerId=3 && status NOT LIKE 'deleted'", $_SESSION['user']['id']);
    }
    
    $app->render('account/dashboard.html.twig', array('adsList' => $adsList));
});

