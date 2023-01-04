<?php

namespace KoalaFacade\FilamentAlertBox\Tests;

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;

it(description: 'can set the alert box helper text')
    ->tap(function () {
        $icon = 'just an example';
        $alertBox = AlertBox::make()
            ->icon(name: $icon)
            ->success();

        expect(value: $alertBox->getIcon())->toEqual(expected: $icon);
    });
