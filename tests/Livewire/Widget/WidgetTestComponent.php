<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire\Widget;

use Closure;
use Illuminate\Support\HtmlString;
use KoalaFacade\FilamentAlertBox\Widgets\AlertBoxWidget;

class WidgetTestComponent extends AlertBoxWidget
{
    public string | Closure | null $icon = 'heroicon-o-exclamation';

    public string $type = 'success';

    public string | Closure | null $label = 'Test';

    public string | Closure | null | HtmlString $helperText = 'please shut u freakin mouth';
}
