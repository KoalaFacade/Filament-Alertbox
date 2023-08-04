<?php

namespace KoalaFacade\FilamentAlertBox\Widgets;

use Filament\Forms\Components\Concerns\HasHelperText;
use Filament\Support\Concerns\EvaluatesClosures;
use Filament\Support\Concerns\HasExtraAttributes;
use Filament\Tables\Columns\Concerns\HasLabel;
use Filament\Widgets\ChartWidget;
use Illuminate\Contracts\View\View;
use KoalaFacade\FilamentAlertBox\Concerns\HasIcon;
use KoalaFacade\FilamentAlertBox\Concerns\HasType;

class AlertBoxWidget extends ChartWidget
{
    use EvaluatesClosures,
        HasExtraAttributes,
        HasType,
        HasIcon,
        HasLabel,
        HasHelperText;

    protected static string $view = 'filament-alertbox::widgets.filament-alertbox';

    protected int | string | array $columnSpan = 1;

    public function getColumnSpan(): int | string | array
    {
        return $this->columnSpan;
    }

    public static function canView(): bool
    {
        return true;
    }

    public function render(): View
    {
        /**
         * @phpstan-ignore-next-line
         */
        return view(static::$view);
    }
}
