<?php
$app->get('/', function() use ($app,$categoriesList) {
$page=1;
    $perPage = 3;
    $totalCount = DB::queryFirstField("SELECT COUNT(*) AS count FROM ads");
    $maxPages = ($totalCount + $perPage - 1) / $perPage;
    if ($page > $maxPages) {
        http_response_code(404);
        $app->render('not_found.html.twig');
        return;
    }
    $skip = ($page - 1) * $perPage;
    $adsList = DB::query('SELECT ads.id, title, price, imagePath FROM ads,pictures WHERE ads.id=pictures.adId GROUP by ads.id Order by ads.id desc LIMIT %d,%d', $skip, $perPage);
    $app->render('index.html.twig', array(
        "adsList" => $adsList,
        "maxPages" => $maxPages,
        "currentPage" => $page
            ,'categoryList'=>$categoriesList
    ));
  
});
// Products pagination usinx AJAX - main page
$app->get('/ads(/:page)', function($page = 1) use ($app) {
    $perPage = 3;
    $totalCount = DB::queryFirstField("SELECT COUNT(*) AS count FROM ads");
    $maxPages = ($totalCount + $perPage - 1) / $perPage;
    if ($page > $maxPages) {
        http_response_code(404);
        $app->render('not_found.html.twig');
        return;
    }
    $skip = ($page - 1) * $perPage;
    $adsList = DB::query('SELECT ads.id, title, price, imagePath FROM ads,pictures WHERE ads.id=pictures.adId GROUP by ads.id Order by ads.id desc LIMIT %d,%d', $skip, $perPage);
    $app->render('ads.html.twig', array(
        "adList" => $adsList,
        "maxPages" => $maxPages,
        "currentPage" => $page
    ));
});

// Products pagination usinx AJAX - just the table of products
$app->get('/ajax/ads(/:page)', function($page = 1) use ($app) {
    $perPage = 3;
    $totalCount = DB::queryFirstField("SELECT COUNT(*) AS count FROM ads");
    $maxPages = ($totalCount + $perPage - 1) / $perPage;
    if ($page > $maxPages) {
        http_response_code(404);
        $app->render('not_found.html.twig');
        return;
    }
    $skip = ($page - 1) * $perPage;
    $adsList = DB::query('SELECT ads.id, title, price, imagePath FROM ads,pictures WHERE ads.id=pictures.adId GROUP by ads.id Order by ads.id desc LIMIT %d,%d', $skip, $perPage);
    $app->render('ajaxads.html.twig', array(
        "adList" => $adsList,
    ));
});