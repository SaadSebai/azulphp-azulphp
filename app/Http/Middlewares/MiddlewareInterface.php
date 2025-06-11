<?php

namespace App\Http\Middlewares;

interface MiddlewareInterface
{
    public function handle(): void;
}