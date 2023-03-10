<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire\Widget;

use function Pest\Livewire\livewire;

it(description: 'can render element')
    ->tap(callable: function () {
        livewire(name: WidgetTestComponent::class)->assertOk()
            ->assertSee(values: ['Test', 'please shut u freakin mouth', 'icon px-3 mr-2'])
            ->assertSee(values: baseClassWith(backgroundColor: 'bg-success-500', textColor: 'text-gray-50'));
    })
    ->group('widget');
