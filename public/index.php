<?php

use App\Middlewares\TwigMiddleware;
use App\Providers\AppServiceProvider;
use App\Providers\TwigServiceProvider;
use App\Routes\Web;
use DI\Bridge\Slim\Bridge as AppSlimBridge;
use DI\Container;

include_once __DIR__ . '/../vendor/autoload.php';

// Start providers
$container = new Container();
AppServiceProvider::boot($container);
TwigServiceProvider::boot($container);

// Start AppFactory (SlimPHP PHP/DI Bridge)
$app = AppSlimBridge::create($container);

// Start Middleware
TwigMiddleware::handle($app);

// Start routes
Web::init($app);

// Start application
$app->run();
