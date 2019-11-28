<?php

// require_once('app/index.php');

require 'vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

$router->namespace("Controller");

$router->group(null);
$router->get('/', 'Web:home');
$router->get('/register', 'Web:register');

$router->dispatch();

$router->group("error");
$router->get("/{errcode}", "Web:error");

if($router->error()){
    $router->redirect("/error/{$router->error()}");
}