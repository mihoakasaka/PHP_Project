<?php

// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

// URL/event handlers go here
$app->get('/', function() use ($app) {
    $adsList = array();
    
        $adsList = DB::query('SELECT ads.id, title, price, imagePath FROM ads,pictures WHERE ads.id=pictures.adId Order by ads.id desc' );
    
    $app->render('index.html.twig', array('adsList' => $adsList));
});

