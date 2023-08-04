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
            ->assertSee(values: '--c-300: var(--success-300);--c-400: var(--success-400);--c-500: var(--success-500);--c-600: var(--success-600);');
    });

it(description: 'can show success background color when type is warning')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->helperText(text: 'tests')
                ->warning(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: '--c-300: var(--warning-300);--c-400: var(--warning-400);--c-500: var(--warning-500);--c-600: var(--warning-600);');
    });

it(description: 'can show success background color when type is primary')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->helperText(text: 'tests')
                ->info(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: '--c-300: var(--primary-300);--c-400: var(--primary-400);--c-500: var(--primary-500);--c-600: var(--primary-600);');
    });

it(description: 'can show success background color when type is danger')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->helperText(text: 'tests')
                ->danger(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: '--c-300: var(--danger-300);--c-400: var(--danger-400);--c-500: var(--danger-500);--c-600: var(--danger-600);');
    });
