<?php

namespace KoalaFacade\FilamentAlertBox\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Illuminate\Encryption\Encrypter;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\ViewServiceProvider;
use KoalaFacade\FilamentAlertBox\FilamentAlertBoxServiceProvider;
use Livewire\LivewireServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Get package providers.
     *
     * @param  Application  $app
     * @return array<int, class-string<ServiceProvider>>
     */
    protected function getPackageProviders($app): array
    {
        return [
            FilamentAlertBoxServiceProvider::class,
            FilamentServiceProvider::class,
            WidgetsServiceProvider::class,
            ViewServiceProvider::class,
            LivewireServiceProvider::class,
            FormsServiceProvider::class,
            BladeIconsServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            SupportServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set(
            key: 'app.key',
            value: 'base64:' . base64_encode(
                Encrypter::generateKey(config()['app.cipher'])
            ));
    }
}
