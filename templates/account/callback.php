<?php 
require_once 'config.php';

try{
    $accessToken = $helper->getAccessToken();
} catch (\Facebook\Exceptions\FacebookResponseException $ex){
    echo "Response Exception:".$ex->getMessage();
    exit();
    
}catch (\Facebook\Exceptions\FacebookSDKException $ex){
    echo "SDK Exception:".$ex->getMessage();
    exit();
}

if(!$accessToken){
    header('Location: login.php');
    exit();
}

$oAuth2Client = $FB->getoAuth2Client();
if(!$accessToken->isLongLived())
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

$response = $FB->get("me?fields=id, first_name, last_name,email ");
$userData = $response->getGraphNode()->asArray();

?>
