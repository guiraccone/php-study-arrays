<?php

const BASE_PATH =  __DIR__ . "/../";

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    // Core\Database
    $class = str_replace(search: '\\', replace: DIRECTORY_SEPARATOR, subject: $class);
    require basePath("{$class}.php");
});


$router = new Core\Router();
$routes = require basePath(path: "routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, 'GET');
