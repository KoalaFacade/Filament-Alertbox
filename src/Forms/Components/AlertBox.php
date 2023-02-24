<?php

namespace KoalaFacade\FilamentAlertBox\Forms\Components;

use Filament\Forms\Components\Field;
use KoalaFacade\FilamentAlertBox\Concerns\Forms\HasType;

class AlertBox extends Field
{
    use HasType;

    protected string $view = 'filament-alertbox::forms.components.filament-alertbox';

    public static function make(string $name = ''): static
    {
        return parent::make(name: $name);
    }
}
