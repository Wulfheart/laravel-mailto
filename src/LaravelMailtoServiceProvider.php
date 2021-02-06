<?php

namespace Wulfheart\LaravelMailto;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMailtoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */

        $path = sprintf(
            '%s%s%s',
            __DIR__,
            DIRECTORY_SEPARATOR,
            'helper.php'
        );

        if (is_file($path)) {
            require_once $path;

        }
        $package->name('laravel-mailto');
    }
}
