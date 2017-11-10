<?php

// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

// URL/event handlers go here
$app->get('/', function() use ($app) {
    //check if user has an account
        $account = DB::queryFirstField('SELECT id from users WHERE email = %s', $_SESSION['facebook_access_token']['email']);
    if (!$account) {
       
        $result = DB::insert('users', array(
                    'name' => $_SESSION['facebook_access_token']['fName'].' '.$_SESSION['facebook_access_token']['lName'],
                    'email' => $_SESSION['facebook_access_token']['email'],
                    'fbId' => $_SESSION['facebook_access_token']['ID'],
        ));
        if ($result) {
            $userID = DB::insertId();
            $log->debug(sprintf("Regisetred fbUser %s with id %s", $_SESSION['facebook_access_token']['first_name'], $userID));
            $_SESSION['facebook_access_token']['userID'] = $userID;
        }
         $app->render('index.html.twig', array('adsList' => $adsList));
    }
    //check if user has FBid in record


    $adsList = array();

    $adsList = DB::query('SELECT ads.id, title, price, imagePath FROM ads,pictures WHERE ads.id=pictures.adId Order by ads.id desc');

    $app->render('index.html.twig', array('adsList' => $adsList));
});

