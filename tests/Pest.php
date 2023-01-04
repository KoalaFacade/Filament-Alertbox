<?php

/*
|--------------------------------------------------------------------------
| tests Case
|--------------------------------------------------------------------------
|
| The closure you provide to your tests functions is always bound to a specific PHPUnit tests
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

use Illuminate\Support\Str;
use KoalaFacade\FilamentAlertBox\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your tests files.
|
*/
function baseClassWith(string $backgroundColor = '', string $textColor = ''): string
{
    return Str::of(string: 'filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group p-5 rounded-lg')
        ->append(
            ' ' . $backgroundColor,
            ' ' . $textColor
        );
}
