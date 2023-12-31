<?php

namespace Khangrey\BasqaruComponents;

use Khangrey\BasqaruComponents\Commands\BasqaruComponentsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BasqaruComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('basqaru-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_basqaru-components_table')
            ->hasCommand(BasqaruComponentsCommand::class);
    }
}
