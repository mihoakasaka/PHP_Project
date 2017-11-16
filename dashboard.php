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

