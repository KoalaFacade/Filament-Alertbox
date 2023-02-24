<?php

namespace KoalaFacade\FilamentAlertBox\Concerns;

use Closure;

trait HasIcon
{
    protected string | Closure | null $icon = '';

    protected string | Closure | null $resolveIconUsing = null;

    /**
     * @deprecated can use resolveIconUsing
     */
    public function icon(string | Closure | null $name): static
    {
        return $this->resolveIconUsing(name: $name);
    }

    public function resolveIconUsing(string | Closure | null $name): static
    {
        $this->resolveIconUsing = $name;

        return $this;
    }

    public function getIcon(): mixed
    {
        $icon = $this->resolveIconUsing ?: $this->icon;

        return $this->evaluate(value: $icon);
    }
}
