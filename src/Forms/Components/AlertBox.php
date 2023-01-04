<?php

namespace KoalaFacade\FilamentAlertBox\Forms\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Field;
use KoalaFacade\FilamentAlertBox\Concerns\HasIcon;
use KoalaFacade\FilamentAlertBox\Concerns\HasType;

class AlertBox extends Field
{
    use HasExtraInputAttributes,
        HasType,
        HasIcon;

    protected string $view = 'filament-alertbox::forms.components.filament-alertbox';

    public static function make(string $name = ''): static
    {
        return parent::make(name: $name);
    }
}
