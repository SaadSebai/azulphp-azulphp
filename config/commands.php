<?php

return [
    'run' => \Azulphp\Commands\RunCommand::class,
    'migrate' => \Azulphp\Commands\Database\MigrationCommand::class,
    'seed' => \Azulphp\Commands\Database\SeedCommand::class,
    'seeder:run' => \Azulphp\Commands\Database\RunSeederCommand::class,
    'serve' => \Azulphp\Commands\ServeCommand::class,
    'make:controller' => \Azulphp\Commands\FileGenerate\Generators\ControllerGenerator::class,
    'make:request' => \Azulphp\Commands\FileGenerate\Generators\RequestGenerator::class,
    'make:api-response' => \Azulphp\Commands\FileGenerate\Generators\ApiResponseGenerator::class,
    'make:middleware' => \Azulphp\Commands\FileGenerate\Generators\MiddlewareGenerator::class,
    'make:repository' => \Azulphp\Commands\FileGenerate\Generators\RepositoryGenerator::class,
    'make:service' => \Azulphp\Commands\FileGenerate\Generators\ServiceGenerator::class,
    'make:model' => \Azulphp\Commands\FileGenerate\Generators\ModelGenerator::class,
];