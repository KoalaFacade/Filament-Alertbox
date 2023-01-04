@php
    $backgroundClass = match($getType()) {
        'primary' => 'bg-primary-300',
        'success' => 'bg-success-300',
        'warning' => 'bg-warning-300',
        'danger' => 'bg-danger-400',
        'secondary' => 'bg-slate-300',
    };

    $textColor = match($getType()) {
        'primary',
        'success',
        'warning' => 'text-slate-700',
        default => 'text-slate-50'
    };

@endphp
<div {{ $attributes
        ->merge($getExtraAttributes())
        ->class(
            [
                'filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group p-5 rounded-lg',
                $backgroundClass,
                $textColor
            ]
        )
    }}
>
    @if ($icon = $getIcon())
        <div class="icon mr-5">
            <x-dynamic-component :component="$icon" class="w-10 h-10" />
        </div>
    @endif
    <div class="alert-content">
        @if($getLabel())
            <div class="title">
                <h3 class="text-xl font-medium">{{ $getLabel() }}</h3>
            </div>
        @endif
        <div class="description font-light">
            {{$getHelperText()}}
        </div>
    </div>
</div>
