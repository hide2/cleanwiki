<?php
// router
require __DIR__.'/_router.php';
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', function () {
    require __DIR__.'/_home.php';
});

$router->get('/([a-z0-9_-]+)', function ($page) {
    require __DIR__.'/content/'.$page.'.php';
});

// Run it!
$router->run();
?>