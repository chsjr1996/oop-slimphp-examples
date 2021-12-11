<?php

namespace App\Middlewares;

use Slim\App;
use Slim\Views\TwigMiddleware as ViewsTwigMiddleware;

class TwigMiddleware implements IMiddleware
{
    /**
     * @param App $app
     * @return void
     */
    public static function handle(App $app): void
    {
        $app->add(ViewsTwigMiddleware::createFromContainer($app));
    }
}