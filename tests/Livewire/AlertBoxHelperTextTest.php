<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire;

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;
use function Pest\Livewire\livewire;

it(description: 'can show success background color when type is warning')
    ->tap(callable: function () {
        CreatePost::$formSchema = [
            AlertBox::make()
                ->helperText(text: 'fuck im dying with my friendzone')
                ->warning(),
        ];

        livewire(name: CreatePost::class)
            ->assertSee(values: 'fuck im dying with my friendzone');
    });