<?php

namespace KoalaFacade\FilamentAlertBox\Concerns;

trait HasType
{
    public string $type = 'secondary';

    public function getType(): string
    {
        return $this->type;
    }
}
