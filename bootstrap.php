<?php

use Azulphp\App;
use Azulphp\Commands\CommandManager;
use Azulphp\Config;
use Azulphp\Container;
use Azulphp\Database;

$container = new Container();

$container->bind(Database::class, function () {
    $config = require base_path('config/database.php');

    return new Database($config);
});

$container->bind(Config::class, function () {
    $config = require base_path('config/app.php');

    return new Config($config);
});

$container->bind(CommandManager::class, function () {
    $config = require base_path('config/commands.php');

    return new CommandManager($config);
});

App::setContainer($container);
