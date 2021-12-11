<?php

namespace App\Middlewares;

use Slim\App;

interface IMiddleware
{
    public static function handle(App $app): void;
}