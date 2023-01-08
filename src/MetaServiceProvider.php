<?php

namespace Alfred\Meta;

use Alfred\Meta\Commands\MetaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MetaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('meta')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations('2023_01_08_000000_create_meta_table')
            ->runsMigrations()
            ->hasCommand(MetaCommand::class);
    }
}
