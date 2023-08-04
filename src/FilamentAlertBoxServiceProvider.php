<?php

namespace KoalaFacade\FilamentAlertBox;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentAlertBoxServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-alertbox';

    /**
     * @var string[]
     */
    protected array $styles = [
        'plugin-filament-alertbox-styles' => __DIR__ . '/../resources/dist/filament-alertbox.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name(name: static::$name)
            ->hasViews();
    }
}
