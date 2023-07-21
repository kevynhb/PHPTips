<?php

use CoffeeCode\Router\Router;
use League\Plates\Engine;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(ROOT);
$router->namespace("Source\App");

$router->group(null);
$router->get("/", function(){
	$view = Engine::create("theme", "php");
	echo $view->render("home");
});

$router->dispatch();

if ($router->error()) {
    var_dump($router->error());
}