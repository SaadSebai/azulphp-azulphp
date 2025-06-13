<?php

const BASE_PATH = __DIR__.'/../';

// Init App
require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . 'vendor/azulphp/framework/src/Helpers/functions.php';
require BASE_PATH . 'vendor/azulphp/framework/src/header.php';

$app = require BASE_PATH.'bootstrap/app.php';

// Router
$app->getRouter()
    ->handleRequest();