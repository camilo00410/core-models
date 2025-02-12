<?php

namespace Fiduprevisora\CoreModels;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CoreModelsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('core-models');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/Models/User' => app_path('Models/User'),
            ], 'core-models');
        }
    }
}
