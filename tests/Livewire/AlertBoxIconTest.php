<?php

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;
use KoalaFacade\FilamentAlertBox\Tests\Livewire\CreatePost;
use function Pest\Livewire\livewire;

it(description: 'can show success background color when type is warning')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->icon(name: 'heroicon-o-exclamation')
                ->warning(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: 'icon mr-5');
    });
