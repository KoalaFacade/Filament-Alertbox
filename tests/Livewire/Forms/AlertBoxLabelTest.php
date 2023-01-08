<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire;

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;
use KoalaFacade\FilamentAlertBox\Tests\Livewire\Forms\CreatePost;
use function Pest\Livewire\livewire;

it(description: 'can show the label')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->label(label: 'love you more than i know')
                ->success(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: 'love you more than i know');
    });
