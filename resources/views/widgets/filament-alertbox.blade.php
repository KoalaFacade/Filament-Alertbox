<x-filament::widget class="filament-alert-box-widget">
    <x-filament-alertbox::base-alert-box
        :type="$this->getType()"
        :extraAttributes="$this->getExtraAttributes()"
        :icon="$this->getIcon()"
        :label="$this->getLabel()"
        :helperText="$this->getHelperText()"
    />
</x-filament::widget>