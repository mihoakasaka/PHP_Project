<?php

$app->get('/dashboard', function() use ($app) {
    $adsList = array();
    if ($_SESSION['user']) {
        $adsList = DB::query('SELECT ads.id, title, price, imagePath FROM ads,pictures WHERE ads.id=pictures.adId AND ads.sellerId=%i Order by ads.id desc ', $_SESSION['user']['id']);
    }
    $app->render('account/dashboard.html.twig', array('adsList' => $adsList));
});

