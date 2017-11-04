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

// FIXME: until we have log in, we hard code a user a set the session as logged in
$_SESSION['user']=array('id' => 2, 'userName' => "MountainDrew", 'name' => 'Drew');

$app->get('/', function() use ($app) {
  echo'this is garage sale project';
});

$twig = $app->view()->getEnvironment();
$twig->addGlobal('userSession',$_SESSION['user']);

function buildCategoriesStruct(){
    // Build a structure suitable to generate a select element in template for hierachal categories
    
    // FIXME: actually get a list from db
    $categoriesList = array(
        array('categoryId' => 1, 'noPosts' => true, 'categoryDashedName' => 'Cars'),
        array('categoryId' => 2, 'noPosts' => false, 'categoryDashedName' => ' - Used'),
        array('categoryId' => 3, 'noPosts' => false, 'categoryDashedName' => ' - Vintage'),
        array('categoryId' => 4, 'noPosts' => true, 'categoryDashedName' => 'Appliances'),
        array('categoryId' => 5, 'noPosts' => false, 'categoryDashedName' => ' - Dishwahers'),
        array('categoryId' => 6, 'noPosts' => false, 'categoryDashedName' => ' - Blenders')
        
    );
    return $categoriesList;
}

/* Ad/Add and Ad/Edit */

$app->get('/ad/:op(/:id)', function($op, $id = -1) use ($app) {
        if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('not_found.html.twig');
        return;
    }
    
    if ($id != -1) { // We're editing
        $values = ''; // FIXME: actually fetch ad from database
        if (!$values) {
            $app->render('not_found.html.twig');
            return;
        }
    } else { // nothing to load from database - adding
        $values = array();
    }
        $app->render('/temporarytemplates/addAd.html.twig', array(
        'v' => $values,
        'c' => buildCategoriesStruct(),
        'isEditing' => ($id != -1)
    ));

})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));

$app->post('/ad/:op(/:id)', function($op, $id = -1) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('not_found.html.twig');
        return;
    }

    $categoryId = $app->request()->post('categoryId');
    $title = $app->request()->post('title');
    $body = $app->request()->post('body');
    $price = $app->request()->post('price');

    $values = array('categoryId' => $categoryId, 'title' => $title, 'body' => $body, 'price' => $price);
    $errorList = array();
    
    // We're selecting from a list so normally not an issue but someone could craft an incorrect url
    if (!DB::queryFirstRow('SELECT id FROM categories WHERE id=%i',$categoryId)) {
        // Category doesn't exist
        // TODO Log this error
        $values['categoryId'] = '';
    }

    if (strlen($title) < 2 || strlen($title) > 50) {
        $errorList['title'] = "Title must be between 2 and 50 characters long";
        $values['title'] = '';
    }

    if (strlen($body) < 10 || strlen($body) > 1000) {
        $errorList['body'] = "Body should be at least 10 characters long and no more than 1000";
        // We often clear values here bu body may be quite long. Let the user fix whatever is already there.
    }
    
    if ($price == '' || $price < 0 || $price > 99999999.99) {
        $errorList['price'] = "Price should be between 0 and $99999999.99";
        $values['price'] = '';
    }
    
    // Validate pictures
    // Do we have at least 1 and no more than 3.

    if ($errorList) { // There were errors
        $app->render('/temporarytemplates/addAd.html.twig', array(
            'errorList' => $errorList,
            'isEditing' => ($id != -1),
            'v' => $values,
            'c' => buildCategoriesStruct()
            ));
    } else { // All fields validated
        if ($id != -1) {
            DB::update('todos', $values, "id=%i AND ownerId=%i", $id, $_SESSION['user']['id']);
        } else {
            $values['sellerId'] = $_SESSION['user']['id'];
            DB::insert('ads', $values);
        }
        $app->render('/temporarytemplates/addAd_success.html.twig', array('isEditing' => ($id != -1)));
    }
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));


$app->run();

