<?php

namespace KoalaFacade\FilamentAlertBox\Concerns;

use Closure;

trait HasIcon
{
    public string | Closure | null $icon = '';

    public function icon(string | Closure | null $name): static
    {
        $this->icon = $name;

        return $this;
    }

    public function getIcon(): mixed
    {
        return $this->evaluate(value: $this->icon);
    }
}
