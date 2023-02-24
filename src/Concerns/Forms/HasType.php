<?php

namespace KoalaFacade\FilamentAlertBox\Concerns\Forms;

use KoalaFacade\FilamentAlertBox\Concerns\HasIcon;
use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;

/**@mixin AlertBox */
trait HasType
{
    use \KoalaFacade\FilamentAlertBox\Concerns\HasType,
        HasIcon;

    public function success(): static
    {
        $this->type = 'success';

        $this->icon = 'heroicon-o-check-circle';

        return $this;
    }

    public function warning(): static
    {
        $this->type = 'warning';

        $this->icon = 'heroicon-o-exclamation';

        return $this;
    }

    public function danger(): static
    {
        $this->type = 'danger';

        $this->icon = 'heroicon-o-x-circle';

        return $this;
    }

    /**
     * @deprecated can use info()
     */
    public function primary(): static
    {
        return $this->info();
    }

    public function info(): static
    {
        $this->type = 'primary';

        $this->icon = 'heroicon-o-information-circle';

        return $this;
    }
}
