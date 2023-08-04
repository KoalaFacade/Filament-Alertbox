<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire\Widget;

use function Pest\Livewire\livewire;

it(description: 'can render element')
    ->tap(callable: function () {
        livewire(name: WidgetTestComponent::class)->assertOk()
            ->assertSee(values: ['Test', 'please shut u freakin mouth', 'icon px-3 mr-2'])
            ->assertSee(values: '--c-300: var(--success-300);--c-400: var(--success-400);--c-500: var(--success-500);--c-600: var(--success-600);');
    })
    ->group('widget');
