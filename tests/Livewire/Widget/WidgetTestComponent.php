<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire\Widget;

use KoalaFacade\FilamentAlertBox\Widgets\AlertBoxWidget;

class WidgetTestComponent extends AlertBoxWidget
{
    public string | null $icon = 'heroicon-o-exclamation';

    public string $type = 'success';

    public string | null $label = 'Test';

    public string | null $helperText = 'please shut u freakin mouth';
}
