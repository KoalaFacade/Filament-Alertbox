<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire\Widget;

use function Pest\Livewire\livewire;

it(description: 'can render element')
    ->tap(callable: function () {
        livewire(name: WidgetTestComponent::class)->assertOk()
            ->assertSee(values: ['Test', 'please shut u freakin mouth', 'icon mr-5'])
            ->assertSee(values: baseClassWith(backgroundColor: 'bg-success-300', textColor: 'text-slate-700'));
    })
    ->group('widget');
