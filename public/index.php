<?php

use App\Routes\Web;
use Slim\Factory\AppFactory;

include_once __DIR__ . '/../vendor/autoload.php';

// Create AppFactory
$app = AppFactory::create();

// Start routes
Web::init($app);

// Start application
$app->run();
