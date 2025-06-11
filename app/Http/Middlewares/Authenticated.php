<?php

namespace App\Http\Middlewares;

use Azulphp\Helpers\ResponseStatus;
use Azulphp\Session;

class Authenticated implements MiddlewareInterface
{
    public function handle(): void
    {
        if (!Session::has('user')) abort(ResponseStatus::UNAUTHORIZED);
    }
}