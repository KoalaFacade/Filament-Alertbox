<?php

namespace KoalaFacade\FilamentAlertBox\Tests\Livewire\Forms;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreatePost extends Component implements HasForms
{
    use InteractsWithForms;

    public static array $formSchema = [];

    public function getFormSchema(): array
    {
        return static::$formSchema;
    }

    public function render(): View
    {
        return view(view: 'filament-alertbox::tests.components.create-post');
    }
}
