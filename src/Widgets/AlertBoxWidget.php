<?php

namespace KoalaFacade\FilamentAlertBox\Widgets;

use Filament\Forms\Components\Concerns\HasHelperText;
use Filament\Support\Concerns\EvaluatesClosures;
use Filament\Support\Concerns\HasExtraAttributes;
use Filament\Tables\Columns\Concerns\HasLabel;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use KoalaFacade\FilamentAlertBox\Concerns\HasIcon;
use KoalaFacade\FilamentAlertBox\Concerns\HasType;
use Livewire\Component;

class AlertBoxWidget extends Component
{
    use EvaluatesClosures,
        HasExtraAttributes,
        HasType,
        HasIcon,
        HasLabel,
        HasHelperText;

    protected static string $view = 'filament-alertbox::widgets.filament-alertbox';

    /** @var int | string | array<int, string> */
    protected int | string | array $columnSpan = 1;

    /**
     * @return int | string | array<int, string>
     */
    public function getColumnSpan(): int | string | array
    {
        return $this->columnSpan;
    }

    public static function canView(): bool
    {
        return true;
    }

    public function render(): Factory | View
    {
        return view(static::$view);
    }
}
