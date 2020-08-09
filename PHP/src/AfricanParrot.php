<?php

declare(strict_types=1);

namespace Parrot;

class AfricanParrot extends AbstractParrot
{
    public function getSpeed(): float
    {
        return max(0, $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfCoconuts);
    }

    private function getLoadFactor(): float
    {
        return 9.0;
    }
}
