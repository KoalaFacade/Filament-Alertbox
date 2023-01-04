<?php

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;

it(description: 'can set the alert box helper text')
    ->tap(function () {
        $helperText = 'please i dont give attention to you, you broke my heart';
        $alertBox = AlertBox::make()
            ->helperText(text: $helperText)
            ->success();

        expect(value: $alertBox->getHelperText())->toEqual(expected: $helperText);
    });
