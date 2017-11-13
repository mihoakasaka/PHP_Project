<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}
/* * ***************************  log in with FB account ***************************** */
$app->get('/fblogin', function() use ($app) {
     $app->render('account/fblogin.html.twig', array('user' => $_SESSION['facebook_access_token']));
});
$app->post('/fblogin', function() use ($app) {
    //check if user has an account
    $email = $app->request()->post('email');
        $row = DB::queryFirstField('SELECT id from users WHERE email = %s', $email);
    if (!$row) {
       
        $result = DB::insert('users', array(
                    'name' => $_SESSION['facebook_access_token']['fName'].' '.$_SESSION['facebook_access_token']['lName'],
                    'email' => $_SESSION['facebook_access_token']['email'],
                    'fbId' => $_SESSION['facebook_access_token']['ID'],
        ));
        if ($result) {
            $userID = DB::insertId();
            $log->debug(sprintf("Regisetred fbUser %s with id %s", $_SESSION['facebook_access_token']['fName'], $userID));
            $_SESSION['facebook_access_token']['userID'] = $userID;
        }
      
    }else{
        $row = DB::queryFirstRow('SELECT fbId from users WHERE email = %s', $email);
        if(!$row){
            $result=DB::update('users', array('fbId' =>  $_SESSION['facebook_access_token']['ID']));
        }
        
    }
       $app->render('account/fblogin_success.html.twig');
});
/* * *************       password reset         ************************ */

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$app->map('/passreset/request', function() use ($app, $log) {
    if ($app->request()->isGet()) {
        // State 1: first show
        $app->render('account/passreset_request.html.twig');
        return;
    }
    // in Post - receiving submission
    $email = $app->request()->post('email');
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    if ($user) {
        $secretToken = generateRandomString(50);
        /* Version 1: delete-and-insert 2 operations */
        /* DB::delete('passresets', 'userId=%d', $user['id']);
          DB::insert('passresets', array(
          'userId' => $user['id'],
          $secretToken,
          'expiryDateTime' => date("Y-m-d H:i:s", strtotime("+1 day"))
          )); */
        /* Version 2: insertUpdate */
        DB::insertUpdate('passresets', array(
            'userId' => $user['id'],
            'secretToken' => $secretToken,
            'expiryDateTime' => date("Y-m-d H:i:s", strtotime("+5 minutes"))
        ));
        $url = 'http://' . $_SERVER['SERVER_NAME'] . '/passreset/token/' . $secretToken;
        $emailBody = $app->view()->render('passreset_email.html.twig', array(
            'name' => $user['name'], // or 'username' or 'firstName'
            // 'name' => 'User', if you don't have user's name in your database
            'url' => $url
        ));
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "From: Noreply <noreply@ipd10.com>\r\n";
        $headers .= "Date: " . date("Y-m-d H:i:s");
        $toEmail = sprintf("%s <%s>", htmlentities($user['name']), $user['email']);
        // $headers.= sprintf("To: %s\r\n", $user['email']);

        mail($toEmail, "Your password reset for " . $_SERVER['SERVER_NAME'], $emailBody, $headers);
        $log->info('Email sent for password reset for user id=' . $user['id']);
        $app->render('passreset_request_success.html.twig');
    } else { // State 3: failed request, email not registered
        $app->render('account/passreset_request.html.twig', array('error' => true));
    }
})->via('GET', 'POST');

$app->map('/passreset/token/:secretToken', function($secretToken) use ($app, $log) {
    $row = DB::queryFirstRow("SELECT * FROM passresets WHERE secretToken=%s", $secretToken);
    if (!$row) { // row not found
        $app->render('account/passreset_notfound_expired.html.twig');
        return;
    }
    if (strtotime($row['expiryDateTime']) < time()) {
        // row found but token expired
        $app->render('account/passreset_notfound_expired.html.twig');
        return;
    }
    //
    $user = DB::queryFirstRow("SELECT * FROM users WHERE id=%d", $row['userId']);
    if (!$user) {
        $log->err(sprintf("Passreset for token %s user id=%d not found", $row['secretToken'], $row['userId']));
        $app->render('error_internal.html.twig');
        return;
    }
    if ($app->request()->isGet()) { // State 1: first show
        $app->render('account/passreset_form.html.twig', array(
            'name' => $user['name'], 'email' => $user['email']
        ));
    } else { // receiving POST with new password
        $pass1 = $app->request()->post('pass1');
        $pass2 = $app->request()->post('pass2');
        // FIXME: verify quality of the new password using a function
        $errorList = array();
        if ($pass1 != $pass2) {
            array_push($errorList, "Passwords don't match");
        } else { // TODO: do a better check for password quality (lower/upper/numbers/special)
            if (strlen($pass1) < 2 || strlen($pass1) > 50) {
                array_push($errorList, "Password must be between 2 and 50 characters long");
            }
        }
        if ($errorList) { // 3. failed submission
            $app->render('account/passreset_form.html.twig', array(
                'errorList' => $errorList,
                'name' => $user['name'],
                'email' => $user['email']
            ));
        } else { // 2. successful submission
             $passEnc = password_hash($pass1, PASSWORD_BCRYPT);
            DB::update('users', array('password' => $passEnc), 'id=%d', $user['id']);
            $app->render('account/passreset_form_success.html.twig');
        }
    }
})->via('GET', 'POST');


$app->get('/logout', function() use ($app) {
    $_SESSION['user'] = array();
    $app->render('account/logout.html.twig', array('userSession' => $_SESSION['user']));
});
//FB log in

$app->get('/login', function() use ($app) {
    
    $app->render('account/login.html.twig');
});


$app->post('/login', function() use ($app) {

    $email = $app->request()->post('email');
    $password = $app->request()->post('pass');
    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    $error = false;
    if (!$row) {
        $error = true; // user not found
    } else {
        if (password_verify($password, $row['password']) == FALSE) {
            $error = true; // password invalid
        }
    }
    if ($error) {
        $app->render('account/login.html.twig', array('error' => true));
    } else {
        unset($row['password']);
        $_SESSION['user'] = $row;
        $app->render('account/login_success.html.twig', array('userSession' => $_SESSION['user']));
    }
});


//check email if registered *
$app->get('/isemailregistered/:email', function($email)use($app) {
    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    echo!$row ? "" : '<span style="color:red; font-weight:bold;">Email already registered.</span>';
});


// check username if taken
$app->get('/isusernametaken/:username', function($name)use($app) {
    $row = DB::queryFirstRow("SELECT * FROM users WHERE name=%s", $name);
    echo!$row ? "" : '<span style="color:red; font-weight:bold;">Username already taken.</span>';
});



$app->get('/register', function() use ($app) {
    $app->render('account/register.html.twig');
});

$app->post('/register', function() use ($app) {
    $name = $app->request()->post('name');
    $email = $app->request()->post('email');
    $pass1 = $app->request()->post('pass1');
    $pass2 = $app->request()->post('pass2');
    //
    $values = array('name' => $name, 'email' => $email);
    $errorList = array();
    //
    if (strlen($name) < 2 || strlen($name) > 50) {
        $values['name'] = '';
        array_push($errorList, "Name must be between 2 and 50 characters long");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        $values['email'] = '';
        array_push($errorList, "Email must look like a valid email");
    } else {
        $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
        if ($row) {
            $values['email'] = '';
            array_push($errorList, "Email already in use");
        }
    }
    if ($pass1 != $pass2) {
        array_push($errorList, "Passwords don't match");
    } else { // better check for password quality (lower/upper/numbers/special)
        if (strlen($pass1) < 6 || strlen($pass1) > 50) {
            array_push($errorList, "Password must be between 6 and 50 characters long .");
        }
        if (!(preg_match(('/[A-Z]/'), $pass1)) || !(preg_match(('/[a-z]/'), $pass1)) || !(preg_match(('/[0-9]/'), $pass1))) {
            array_push($errorList, "Password must include at least one uppercase letter, lowercase letter and digit.");
        }
    }
    //
    if ($errorList) { // 3. failed submission
        $app->render('account/register.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else { // 2. successful submission
        $passEnc = password_hash($pass1, PASSWORD_BCRYPT);

        DB::insert('users', array('name' => $name, 'email' => $email, 'password' => $passEnc));
        $app->render('account/register_success.html.twig');
    }
});
/* * ***************************  log in with FB account ***************************** */
$app->get('/fblogin', function() use ($app) {
     $app->render('account/fblogin.html.twig', array('user' => $_SESSION['facebook_access_token']));
});
$app->post('/fblogin', function() use ($app) {
    //check if user has an account
        $row = DB::queryFirstField('SELECT id from users WHERE email = %s', $_SESSION['facebook_access_token']['email']);
    if (!$row) {
       
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
      
    }
       $app->render('account/fblogin.html.twig');
});
    //check if user has FBid in record

