<?php

namespace App\Providers;

use DI\Container;
use Slim\Views\Twig;

class TwigServiceProvider implements IServiceProvider
{
    /**
     * @param Container $container
     * @return void
     */
    public static function boot(Container $container): void
    {
        $container->set('view', function() {
            return Twig::create(__DIR__ . '/../Views');
        });
    }
}