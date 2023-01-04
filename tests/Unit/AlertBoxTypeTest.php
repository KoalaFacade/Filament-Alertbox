<?php

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;

it(description: 'can set the alert box with success type')
    ->tap(function () {
        $alertBox = AlertBox::make()->success();

        expect(value: $alertBox->getType())->toEqual(expected: 'success');
    });

it(description: 'can set the alert box with danger type')
    ->tap(function () {
        $alertBox = AlertBox::make()->danger();

        expect(value: $alertBox->getType())->toEqual(expected: 'danger');
    });

it(description: 'can set the alert box with warning type')
    ->tap(function () {
        $alertBox = AlertBox::make()->warning();

        expect(value: $alertBox->getType())->toEqual(expected: 'warning');
    });

it(description: 'can set the alert box with primary type')
    ->tap(function () {
        $alertBox = AlertBox::make()->primary();

        expect(value: $alertBox->getType())->toEqual(expected: 'primary');
    });
