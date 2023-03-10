<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire;

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;
use KoalaFacade\FilamentAlertBox\Tests\Livewire\Forms\CreatePost;
use function Pest\Livewire\livewire;

it(description: 'can show success background color when type is success')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->helperText(text: 'tests')
                ->success(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: baseClassWith(backgroundColor: 'bg-success-500', textColor: 'text-gray-50'));
    });

it(description: 'can show success background color when type is warning')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->helperText(text: 'tests')
                ->warning(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: baseClassWith(backgroundColor: 'bg-warning-500', textColor: 'text-gray-50'));
    });

it(description: 'can show success background color when type is primary')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->helperText(text: 'tests')
                ->primary(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: baseClassWith(backgroundColor: 'bg-primary-500', textColor: 'text-gray-50'));
    });

it(description: 'can show success background color when type is danger')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->helperText(text: 'tests')
                ->danger(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: baseClassWith(backgroundColor: 'bg-danger-500', textColor: 'text-gray-50'));
    });
