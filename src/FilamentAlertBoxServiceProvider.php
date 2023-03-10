<?php

namespace KoalaFacade\FilamentAlertBox;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentAlertBoxServiceProvider extends PluginServiceProvider
{
    /**
     * @var string[]
     */
    protected array $styles = [
        'plugin-filament-alertbox-styles' => __DIR__ . '/../resources/dist/filament-alertbox.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name(name: 'filament-alertbox')
            ->hasViews();
    }
}
