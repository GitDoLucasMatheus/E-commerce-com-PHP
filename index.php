<?php
require_once('vendor/autoload.php');
$app = new \Slim\Slim();
$app->config('debug',true);

$home = new \routes\HomeRouter($app);
$products = new \routes\ProductRouter($app);


$app->run();