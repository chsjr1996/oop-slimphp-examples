<?php

namespace App\Routes;

use App\Controller\HomeController;
use Slim\App;

class Web
{
    public static function init(App $app)
    {
        $app->get('/', [HomeController::class, 'index']);
    }
}
