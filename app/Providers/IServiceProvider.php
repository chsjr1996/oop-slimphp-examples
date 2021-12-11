<?php

namespace App\Providers;

use DI\Container;

interface IServiceProvider
{
    public static function boot(Container $container): void;
}