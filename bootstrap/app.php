<?php

use Azulphp\Core\AppBuilder;

return (new AppBuilder())
    ->setProviders([
        \Azulphp\Core\ServiceProviders\DatabaseServiceProvider::class,
        \Azulphp\Core\ServiceProviders\ConfigServiceProvider::class,
        \Azulphp\Core\ServiceProviders\CommandServiceManager::class,
    ])
    ->setRouting(
        web: base_path('routes/web.php')
    )
    ->create();