<?php

const BASE_PATH =  __DIR__ . "/../";

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    // Core\Database
    $class = str_replace(search: '\\', replace: DIRECTORY_SEPARATOR, subject: $class);
    require basePath("{$class}.php");
});

require basePath("Core/router.php");
