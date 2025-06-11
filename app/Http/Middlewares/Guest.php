<?php

namespace App\Http\Middlewares;


use Azulphp\Session;

class Guest implements MiddlewareInterface
{
    public function handle(): void
    {
        if (Session::has('user')) abort();
    }
}