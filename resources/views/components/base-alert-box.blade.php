@props(['type', 'extraAttributes', 'icon', 'label', 'helperText'])

@php
    $backgroundClass = match($type) {
        'primary' => 'bg-primary-500',
        'success' => 'bg-success-500',
        'warning' => 'bg-warning-500',
        'danger' => 'bg-danger-500',
        'secondary' => 'bg-gray-500',
    };

    $textColor = 'text-gray-50';

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
