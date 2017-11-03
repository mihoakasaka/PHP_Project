<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
session_start();
require_once 'vendor/autoload.php';

//DB::$dbName = 'cp4809_garagesale';
//DB::$user = 'cp4809_garagesal';
DB::$dbName = 'garagesale';
DB::$user = 'garagesale';
DB::$encoding = 'utf8';
DB::$password = '4!}9N0R*398?';


//************Error handling**************//
DB::$nonsql_error_handler='non_sql_hundler';
DB::$error_handler = 'sql_error_handler';

function non_sql_hundler($params) {
    global $app,$log;
  $log->err( "Error: " . $params['error'] );
  http_response_code(500);
 $app->render('internal_error.html.twig');
 
  die; 
}
function sql_error_handler($params) {
    global $app,$log;
 $log->err( "Error: " . $params['error'] );
 $log->err("Query: " . $params['query'] );
 http_response_code(500);
 $app->render('internal_error.html.twig');
  die; 
}

  
// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

// create a log channel
$log = new Logger('mail');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::WARNING));
$log->pushHandler(new StreamHandler('logs/error.log', Logger::WARNING));

if(!isset($_SESSION['user'])){    
    $_SESSION['user']=array();
}
$app->get('/', function() use ($app) {
  echo'this is garage sale project';
});

$twig = $app->view()->getEnvironment();
$twig->addGlobal('userSession',$_SESSION['user']);
/* * ****************** check email if registered *********************** */
$app->get('/isemailregistered/:email', function($email)use($app) {
    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    echo!$row ? "" : '<span style="background-color:red; font-weight:bold;">Email already registered.</span>';
});

/* * ****************** Registration*********************** */
$app->get('/register', function() use ($app) {
    // 1. First show
    $app->render('register.html.twig');
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
    } else { // TODO: do a better check for password quality (lower/upper/numbers/special)
        if (strlen($pass1) < 2 || strlen($pass1) > 50) {
            array_push($errorList, "Password must be between 2 and 50 characters long");
        }
    }
    //
    if ($errorList) { // 3. failed submission
        $app->render('register.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else { // 2. successful submission
        DB::insert('users', array('name' => $name, 'email' => $email, 'password' => $pass1));
        $app->render('register_success.html.twig');
    }
});



$app->run();

