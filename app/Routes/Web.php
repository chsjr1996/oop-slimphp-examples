<?php

namespace App\Routes;

use App\Controllers\HomeController;
use Slim\App;

class Web
{
    /**
     * @param App $app
     * @return void
     */
    public static function init(App $app): void
    {
        $app->get('/', [HomeController::class, 'index']);
    }
}
