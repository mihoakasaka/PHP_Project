<?php

 $app->post('/ad(/:ID)', function($ID) use ($app,$log) {
  
// in Post - receiving submission
    $message = $app->request()->post('message');
    $reciever = DB::queryFirstRow("SELECT * FROM users,ads WHERE ads.sellerId=users.id AND ads.id=%i", $ID);
    $senderId = $_SESSION['user']['id'];
    if (!$reciever) {echo 'not found';}
       
        DB::insert('messages', array(
            'senderId' => $senderId,
            'conversationId' =>1,
            'message' => $message
        ));
        $url = 'http://' . $_SERVER['SERVER_NAME'] . '/dashboard';
        $emailBody = $app->view()->render('message_email.html.twig', array(
            'name' => $reciever['name'], // or 'username' or 'firstName'
// 'name' => 'User', if you don't have user's name in your database
            'sender'=>$_SESSION['user']['name'],
            'url' => $url
        ));
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "From: Noreply <noreply@ipd10.com>\r\n";
        $headers .= "Date: " . date("Y-m-d H:i:s");
        $toEmail = sprintf("%s <%s>", htmlentities($reciever['name']), $reciever['email']);
// $headers.= sprintf("To: %s\r\n", $user['email']);

        mail($toEmail, "You have a message from " . $_SERVER['SERVER_NAME'], $emailBody, $headers);
        $log->info('Email sent to user id=' . $reciever['id']);
        $app->render('account/login_success.html.twig');
    
});
