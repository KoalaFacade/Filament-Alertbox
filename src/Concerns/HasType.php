<?php

namespace KoalaFacade\FilamentAlertBox\Concerns;

use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;

/**@mixin AlertBox */
trait HasType
{
    public string $type = 'secondary';

    public function success(): static
    {
        $this->type = 'success';

        return $this;
    }

    public function warning(): static
    {
        $this->type = 'warning';

        return $this;
    }

    public function danger(): static
    {
        $this->type = 'danger';

        return $this;
    }

    public function primary(): static
    {
        $this->type = 'primary';

        return $this;
    }

    public function getType(): mixed
    {
        return $this->evaluate(value: $this->type);
    }
}
