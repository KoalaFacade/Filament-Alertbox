<?php

namespace KoalaFacade\FilamentAlertBox\Concerns\Widget;

trait HasHelperText
{
    public string | null $helperText;

    protected function getHelperText(): string | null
    {
        return $this->helperText;
    }
}
