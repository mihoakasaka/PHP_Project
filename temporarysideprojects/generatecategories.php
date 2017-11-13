<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();
require_once '../vendor/autoload.php';



DB::$dbName = 'cp4809_garagesale';
DB::$user = 'cp4809_garagesal';
DB::$host = 'ipd10.com';
//DB::$dbName = 'garagesale';
//DB::$user = 'garagesale';
DB::$encoding = 'utf8';
DB::$password = '4!}9N0R*398?';


//************Error handling**************//
DB::$nonsql_error_handler = 'non_sql_hundler';
DB::$error_handler = 'sql_error_handler';

function non_sql_hundler($params) {
    global $app, $log;
    $log->err("Error: " . $params['error']);
    http_response_code(500);
    $app->render('internal_error.html.twig');

    die;
}

function sql_error_handler($params) {
    global $app, $log;
    $log->err("Error: " . $params['error']);
    $log->err("Query: " . $params['query']);
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
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::WARNING));
$log->pushHandler(new StreamHandler('logs/error.log', Logger::WARNING));

$header = <<< ROSESAREBEST
<?php

/* This file is generated automatically. Any edits here will be overwritten. */
        

        
ROSESAREBEST;
 

function buildCategoriesStruct() {
    // Build a structure suitable to generate a select element in template for hierachal categories
    // FIXME: actually get a list from db
    
 //require_once './categories.php';
    //return $categoriesList;
}

$results = DB::query('SELECT * FROM categories');

$categoriesFile = fopen("./categories.php", "w") or die("Unable to open file!");
fwrite($categoriesFile, $header);

fwrite($categoriesFile, '$categoriesList = ' . var_export($results, TRUE));
fwrite($categoriesFile, ';');
fclose($categoriesFile);
echo 'export done';

   