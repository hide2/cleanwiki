<?php
// router
require __DIR__.'/_router.php';
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', function () {
    require __DIR__.'/_home.php';
});

$router->get('/(.*)', function ($page) {
    require __DIR__.'/content/'.urldecode($page).'.php';
});

// Run it!
$router->run();
?>