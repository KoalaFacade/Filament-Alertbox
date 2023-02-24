<?php

namespace KoalaFacade\FilamentAlertBox\Tests;

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;

it(description: 'can resolve the alert box icon')
    ->tap(function () {
        $icon = 'just an example';

        $alertBox = AlertBox::make()
            ->icon(name: $icon)
            ->success();

        expect(value: $alertBox->getIcon())->toEqual(expected: $icon);
    })->group('test');

it(description: 'auto assign success icon')
    ->tap(function () {
        $alertBox = AlertBox::make()
            ->success();

        expect(value: $alertBox->getIcon())->toEqual(expected: 'heroicon-o-check-circle');
    });

it(description: 'auto assign danger icon')
    ->tap(function () {
        $alertBox = AlertBox::make()
            ->danger();

        expect(value: $alertBox->getIcon())->toEqual(expected: 'heroicon-o-x-circle');
    });

it(description: 'auto assign primary icon')
    ->tap(function () {
        $alertBox = AlertBox::make()
            ->danger();

        expect(value: $alertBox->getIcon())->toEqual(expected: 'heroicon-o-x-circle');
    });

it(description: 'auto assign warning icon')
    ->tap(function () {
        $alertBox = AlertBox::make()
            ->warning();

        expect(value: $alertBox->getIcon())->toEqual(expected: 'heroicon-o-exclamation');
    });
