@props(['type', 'extraAttributes', 'icon', 'label', 'helperText'])

@php
    $backgroundClass = match($type) {
        'primary' => '--c-300: var(--primary-300);--c-400: var(--primary-400);--c-500: var(--primary-500);--c-600: var(--primary-600);',
        'success' => '--c-300: var(--success-300);--c-400: var(--success-400);--c-500: var(--success-500);--c-600: var(--success-600);',
        'warning' => '--c-300: var(--warning-300);--c-400: var(--warning-400);--c-500: var(--warning-500);--c-600: var(--warning-600);',
        'danger' => '--c-300: var(--danger-300);--c-400: var(--danger-400);--c-500: var(--danger-500);--c-600: var(--danger-600);',
        'secondary' => '--c-300: var(--gray-300);--c-400: var(--gray-400);--c-500: var(--gray-500);--c-600: var(--gray-600);',
    };

    $textColor = 'text-gray-50';

@endphp
<div {{ $attributes
        ->merge($extraAttributes)
        ->style(styleList: $backgroundClass)
        ->class(
            [
                'filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group p-4 rounded-lg bg-custom-600',
                'text-white'
            ]
        )
    }}
>
    @if ($icon = $icon)
        <div class="icon px-3 mr-2">
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
            {!! nl2br(htmlspecialchars($helperText)) !!}
        </div>
    </div>
</div>
