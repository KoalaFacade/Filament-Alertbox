<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire\Widget;

use Closure;
use Illuminate\Contracts\Support\Htmlable;
use KoalaFacade\FilamentAlertBox\Widgets\AlertBoxWidget;

class WidgetTestComponent extends AlertBoxWidget
{
    public string | Closure | null $icon = 'heroicon-o-exclamation-triangle';

    public string $type = 'success';

    public string | Closure | Htmlable | null $label = 'Test';

    public Closure | string | Htmlable | null $helperText = 'please shut u freakin mouth';
}
