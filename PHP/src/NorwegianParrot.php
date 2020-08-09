<?php

declare(strict_types=1);

namespace Parrot;

class NorwegianParrot extends AbstractParrot
{
    public function getSpeed(): float
    {
        return $this->isNailed ? 0 : $this->getBaseSpeedWith();
    }

    private function getBaseSpeedWith(): float
    {
        return min(24.0, $this->voltage * $this->getBaseSpeed());
    }
}
