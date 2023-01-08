<?php

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;
use KoalaFacade\FilamentAlertBox\Tests\Livewire\Forms\CreatePost;
use function Pest\Livewire\livewire;

it(description: 'can show the icon')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->icon(name: 'heroicon-o-exclamation')
                ->warning(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: 'icon mr-5');
    });
