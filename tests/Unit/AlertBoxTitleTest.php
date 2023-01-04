<?php

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;

it(description: 'can set the alert box label')
    ->tap(function () {
        $alertBoxLabel = 'Warning coz im handsome';
        $alertBox = AlertBox::make()
            ->label(label: $alertBoxLabel)
            ->success();

        expect(value: $alertBox->getLabel())->toEqual(expected: $alertBoxLabel);
    });
