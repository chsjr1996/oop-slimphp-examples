<?php

use App\Routes\Web;
use DI\Bridge\Slim\Bridge as AppSlimBridge;

include_once __DIR__ . '/../vendor/autoload.php';

// Create AppFactory
$app = AppSlimBridge::create();

// Start routes
Web::init($app);

// Start application
$app->run();
