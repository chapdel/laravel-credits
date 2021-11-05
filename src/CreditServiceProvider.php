<?php

namespace Chapdel\Credit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Chapdel\Credit\Commands\CreditCommand;

class CreditServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-credit')
            ->hasConfigFile("credits")
            ->hasMigration('create_credit_table');
    }
}
