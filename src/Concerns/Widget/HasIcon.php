<?php

namespace KoalaFacade\FilamentAlertBox\Concerns\Widget;

trait HasIcon
{
    public string | null $icon = '';

    public function getIcon(): string | null
    {
        return $this->icon;
    }
}
