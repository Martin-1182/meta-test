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
            ->hasMigration('create_meta_table')
            ->hasCommand(MetaCommand::class);
    }
}
