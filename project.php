<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();
require_once 'Facebook/autoload.php';
require_once 'vendor/autoload.php';
require_once 'fbconfig.php';



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

if ($_SERVER['SERVER_NAME'] != 'localhost') {
//sessions 
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['public_profile', 'email']; // optional
    $loginUrl = $helper->getLoginUrl('http://garagesale.ipd10.com/callback.php', $permissions);
    echo $loginUrl;
    $logoutUrl = $helper->getLoginUrl('http://garagesale.ipd10.com/callback.php', $permissions);
}
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}
if (!isset($_SESSION['facebook_access_token'])) {
    $_SESSION['facebook_access_token'] = array();
}


$twig = $app->view()->getEnvironment();
if ($_SERVER['SERVER_NAME'] != 'localhost') {
    $twig->addGlobal('fbUser', $_SESSION['facebook_access_token']);
    $twig->addGlobal('loginUrl', $loginUrl);
}
$twig->addGlobal('userSession', $_SESSION['user']);

$app->get('/logout', function() use ($app) {
    $_SESSION['user'] = array();
    $app->render('account/logout.html.twig', array('userSession' => $_SESSION['user']));
});

$app->get('/login', function() use ($app) {

    $app->render('account/login.html.twig', array('userSession' => $_SESSION['user']));
});

function buildCategoriesStruct() {
    // Build a structure suitable to generate a select element in template for hierachal categories
    // FIXME: actually get a list from db
    $categoriesList = array(
        array('categoryId' => 5, 'noPosts' => true, 'categoryDashedName' => 'Cars'),
        array('categoryId' => 6, 'noPosts' => false, 'categoryDashedName' => ' - Used'),
        array('categoryId' => 7, 'noPosts' => false, 'categoryDashedName' => ' - Vintage'),
        array('categoryId' => 8, 'noPosts' => true, 'categoryDashedName' => 'Appliances'),
        array('categoryId' => 9, 'noPosts' => false, 'categoryDashedName' => ' - Dishwahers'),
        array('categoryId' => 10, 'noPosts' => false, 'categoryDashedName' => ' - Blenders')
    );
    return $categoriesList;
}

/* Ad/Add and Ad/Edit */

$app->get('/ad/:op(/:id)', function($op, $id = -1) use ($app, $log) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('not_found.html.twig');
        return;
    }

    if ($id != -1) { // We're editing
        // Fetch ad from database
        $values = DB::queryFirstRow('SELECT * FROM `ads` WHERE id=%d AND sellerId=%d', $id, $_SESSION['user']['id']);
        if (!$values) {
            $app->render('not_found.html.twig');
            return;
        }
    } else { // nothing to load from database - adding
        $values = array();
    }
    $app->render('addEditAd.html.twig', array(
        'v' => $values,
        'c' => buildCategoriesStruct(),
        'isEditing' => ($id != -1)
    ));
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));

$app->post('/ad/:op(/:id)', function($op, $id = -1) use ($app, $log) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('not_found.html.twig');
        return;
    }

    // Get the current number of pictures
    if ($op == 'edit') {
        $existingImagesCount = DB::queryFirstField("SELECT COUNT(id) FROM pictures WHERE adId=%d", $id);
    } else {
        $existingImagesCount = 0; // If we're adding, we're starting at 0.
    }

    $categoryId = $app->request()->post('categoryId');
    $title = $app->request()->post('title');
    $body = $app->request()->post('body');
    $price = $app->request()->post('price');

    $values = array('categoryId' => $categoryId, 'title' => $title, 'body' => $body, 'price' => $price);
    $errorList = array();

    // We're selecting from a list so normally not an issue but someone could craft an incorrect url
    if (!DB::queryFirstRow('SELECT id FROM categories WHERE id=%i', $categoryId)) {
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
    // Form allows multiple upload of multiple files as a single operation
    // When multiple files are uploaded, each key of files has an array value
    // i.e. adImages['error'] becomes adImages['error'][0]
    // If no image is uploaded, only the first element exists
    $adImages = array();
    $imageCount = 0;

    // is file being uploaded
    if ($_FILES['adImages']['error'][0] != UPLOAD_ERR_NO_FILE) {

        $adImages = $_FILES['adImages'];

        // Loop over all elements to check for upload errors
        while ($imageCount < count($adImages['error'])) {

            if ($adImages['error'][$imageCount] != 0) {
                $errorList['adImages'] = (isset($errorList['adImages']) ? $errorList['adImages'] . ' ' : '') . ('Error uploading file # ' . ($imageCount + 1));
                $log->err("Error uploading file: " . print_r($adImages, true));
            } else {
                if (strstr($adImages['name'][$imageCount], '..')) {
                    $errorList['adImages'] = (isset($errorList['adImages']) ? $errorList['adImages'] . ' ' : '') . "Invalid file name for image # " . ($imageCount + 1 );
                    $log->warn("Uploaded file name with .. in it (possible attack): " . print_r($adImages, true));
                }
                // TODO: check if file already exists, check maximum size of the file, dimensions of the image etc.
                $info = getimagesize($adImages["tmp_name"][$imageCount]);
                if ($info == FALSE) {
                    $errorList['adImages'] = (isset($errorList['adImages']) ? $errorList['adImages'] . ' ' : '') . "File doesn't look like a valid image " . ($imageCount + 1 );
                } else {
                    if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/gif' || $info['mime'] == 'image/png') {
                        // image type is valid - all good
                    } else {
                        $errorList['adImages'] = (isset($errorList['adImages']) ? $errorList['adImages'] . ' ' : '') . "Images must be a JPG, GIF, or PNG only.";
                    }
                }
            }
            $imageCount++;
        }
        if (($imageCount + $existingImagesCount) > 3) {
            $errorList['adImages'] = (isset($errorList['adImages']) ? $errorList['adImages'] . ' ' : '') . "Can't upload more than 3 files at a time. Can't have more than 3 pictures per ad.";
        }
    } else { // no file uploaded
        if ($op == 'add') {
            $errorList['adImages'] = "At least one image is required when creating new ad";
        }
    }


    if ($errorList) { // There were errors
        $app->render('addEditAd.html.twig', array(
            'errorList' => $errorList,
            'isEditing' => ($id != -1),
            'v' => $values,
            'c' => buildCategoriesStruct()
        ));
    } else { // All fields validated
        // Process images
        $sanitizedImages = array();
        for ($i = 0; $i < $imageCount; $i++) {
            $sanitizedFileName = preg_replace('[^a-zA-Z0-9_\.-]', '_', $adImages['name'][$i]);
            $imagePath = 'uploads/' . $sanitizedFileName;
            if (!move_uploaded_file($adImages['tmp_name'][$i], $imagePath)) {
                $log->err("Error moving uploaded file: " . print_r($adImages, true));
                $app->render('internal_error.html.twig');
                return;
            }
            // TODO: if EDITING and new file is uploaded we should delete the old one in uploads
            $sanitizedImages[$i]['imagePath'] = "/" . $imagePath;
        }

        if ($id != -1) {
            // Update ad
            DB::update('ads', $values, "id=%i AND sellerId=%i", $id, $_SESSION['user']['id']);
        } else {
            $values['sellerId'] = $_SESSION['user']['id'];
            // Insert ad record
            DB::insert('ads', $values);
            $id = DB::insertId(); // Get ID of inserted ad for pictures
        }
        
        // Insert Pictures for add and edit
        if ($imageCount > 0 ) {
            for ($i = 0; $i < count($sanitizedImages); $i++) {
                // Add FK to link picture to ad
                $sanitizedImages[$i]['adId'] = $id;
            }
            db::insert('pictures', $sanitizedImages);
        }

        $app->render('addEditAd_success.html.twig', array('isEditing' => ($id != -1)));
    }
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));

/* Search */
$app->get('/search', function() use ($app, $log) {
    $app->render('searchresults.html.twig');
});

$app->post('/search', function() use ($app, $log) {
    $searchTerm = $app->request()->post('searchTerm');

    $values = array('searchTerm' => $searchTerm);

    $values['adResults'] = DB::query('SELECT * from ads WHERE title LIKE %ss', $searchTerm);
    $values['categoryResults'] = DB::query('SELECT * from categories WHERE description LIKE %ss', $searchTerm);
    $values['userResults'] = DB::query('SELECT * from users WHERE username LIKE %ss OR name LIKE %ss', $searchTerm, $searchTerm);

    $app->render('searchresults.html.twig', array('v' => $values));
});

/* Categories */

// Browse a category by name
$app->get('/category/:name', function($name) use ($app, $log) {
    echo 'browsing category ' . $name;

    // Search for category by name
});




require_once 'account.php';
require_once 'admin.php';

$app->run();

