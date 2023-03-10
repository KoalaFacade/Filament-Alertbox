<?php

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;
use KoalaFacade\FilamentAlertBox\Tests\Livewire\Forms\CreatePost;
use function Pest\Livewire\livewire;

it(description: 'can show the icon')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->warning(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: 'icon px-3 mr-2');
    });

it(description: 'can show the icon if resolve the icon manually')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->resolveIconUsing(name: 'heroicon-o-check-circle')
                ->warning(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: 'icon px-3 mr-2');
    });
