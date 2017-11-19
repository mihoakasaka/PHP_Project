<?php
session_start();
require_once 'Facebook/autoload.php';
require_once 'vendor/autoload.php';



$fb = new Facebook\Facebook([
  'app_id' => '141580526488696', 
  'app_secret' => '67f5f1f7137085c67feaf1e7a55a59a2',
  'default_graph_version' => 'v2.1',
  ]);
$helper = $fb->getRedirectLoginHelper();

try {
    $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (!isset($accessToken)) {
    if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Error Reason: " . $helper->getErrorReason() . "\n";
        echo "Error Description: " . $helper->getErrorDescription() . "\n";
        echo ' return to <a href=\'/login\'>Log in</a>';
    } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request. return to <a href=\'/\'>Home</a>';
    }
    exit;
}
$fb->setDefaultAccessToken($accessToken);
try {
    $response = $fb->get('/me?locale=en_US&fields=id,name,email,first_name,last_name');
    $userNode = $response->getGraphUser();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
//echo 'Logged in as ' . $userNode->getName();
$fbUser = array(
  
    'name' => $userNode->getName(),
    'email' => $userNode->getEmail(),
   'ID' => $userNode->getId(),
);
$_SESSION['facebook_access_token'] = $fbUser;
$_SESSION['user'] = array();
header("Location:/fblogin");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

