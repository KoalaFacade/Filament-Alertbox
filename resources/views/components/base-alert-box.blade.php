@props(['type', 'extraAttributes', 'icon', 'label', 'helperText'])

@php

    $backgroundClass = match($type) {
        'primary' => 'bg-primary-300',
        'success' => 'bg-success-300',
        'warning' => 'bg-warning-300',
        'danger' => 'bg-danger-400',
        'secondary' => 'bg-slate-300',
    };

    $textColor = match($type) {
        'primary',
        'success',
        'warning' => 'text-slate-700',
        default => 'text-slate-50'
    };

@endphp
<div {{ $attributes
        ->merge($extraAttributes)
        ->class(
            [
                'filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group p-5 rounded-lg',
                $backgroundClass,
                $textColor
            ]
        )
    }}
>
    @if ($icon = $icon)
        <div class="icon mr-5">
            <x-dynamic-component :component="$icon" class="w-10 h-10" />
        </div>
    @endif
    <div class="alert-content">
        @if($label)
            <div class="title">
                <h3 class="text-xl font-medium">{{ $label }}</h3>
            </div>
        @endif
        <div class="description font-light">
            {{$helperText}}
        </div>
    </div>
</div>
