<?php

namespace DraftsmanInc\DraftsmanLaravel;

use DraftsmanInc\DraftsmanLaravel\Commands\DraftsmanCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DraftsmanLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('draftsman-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('web')
            ->hasCommand(DraftsmanCommand::class);
    }
}
