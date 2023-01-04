<?php

namespace KoalaFacade\FilamentAlertBox;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentAlertBoxServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name(name: 'filament-alertbox')
            ->hasViews();
    }
}
