<?php
// encoding
$encod = iconv_get_encoding("internal_encoding");

// router
require __DIR__.'/_router.php';
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', function () {
    require __DIR__.'/_home.php';
});

$router->get('/(.*)', function ($page) {
	$page = urldecode($page);
	$f = iconv('utf-8', 'gbk', $page);
    require __DIR__.'/content/'.$f.'.php';
});

// Run it!
$router->run();
?>