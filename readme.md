<img src="https://i.ibb.co/JzJ9Gz4/Personal-design.png" alt="preview of package" width="100%"/>

<p align="center">
    <a href="https://packagist.org/packages/koalafacade/filament-alertbox"><img src="https://img.shields.io/packagist/v/KoalaFacade/filament-alertbox?color=F28D1A&style=for-the-badge" alt="Packagist"/></a>
    <a href="https://github.com/KoalaFacade/Filament-Alertbox/actions/workflows/run-tests.yml"><img src="https://img.shields.io/github/actions/workflow/status/KoalaFacade/Filament-Alertbox/run-tests.yml?branch=main&label=test&style=for-the-badge" alt="Test Passing"/></a>
    <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-^9.x-red?style=for-the-badge&logo=Laravel" alt="Laravel" /></a>
    <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-8.1-7A86B8?style=for-the-badge&logo=php" alt="PHP Badge"/></a>
</p>



> Filament plugin for display a static alert box in your filament forms or widget.

## Installation
You can install the package via composer: 
```bash
composer require koalafacade/filament-alertbox
```

## Usage

### Forms
```php
use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox

AlertBox::make()
    ->label(label: 'Oops')
    ->helperText(label: 'please make a payment first.')
    ->icon(name: 'heroicon-o-exclamation')
    ->warning();
```

### Available Method
This field has most of the same functionality of the Field class
 ```php
  /** define alert type */
  function primary(): static;
  function warning(): static;
  function success(): static;
  function danger(): static;

  /** hide alert box */
  function hidden(bool | Closure $condition = true): static;
  function hiddenOn(string | array $contexts): static;

  /** define alert icon */
  function hiddenOn(string | array $contexts): static;
 ```
### Widget
For implement alert box widget you can create a widget as usual then inheritance our package class
```php
use  KoalaFacade\FilamentAlertBox\Widgets\AlertBoxWidget;

class YourWidgetTho extends AlertBoxWidget
{
    public string | Closure | null $icon = 'heroicon-o-exclamation';
    
    /** success, warning, danger, primary */
    public string $type = 'success';

    public string | Closure | null $label = 'Test';

    public string | Closure | null | HtmlString $helperText = 'please shut u freakin mouth';
}
```
## License
The MIT License (MIT). Please see [License File](https://github.com/KoalaFacade/Filament-Alertbox/blob/main/LICENSE.md) for more information.

