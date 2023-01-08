<?php

namespace KoalaFacade\FilamentAlertBox\Concerns\Widget;

trait HasLabel
{
    public string | null $label;

    protected function getLabel(): string | null
    {
        return $this->label;
    }
}
