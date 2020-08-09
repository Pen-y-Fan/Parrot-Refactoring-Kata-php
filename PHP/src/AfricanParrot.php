<?php

namespace Parrot;

class AfricanParrot extends AbstractParrot
{
    public function getSpeed(): float
    {
        return max(0, $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfCoconuts);
    }
    private function getLoadFactor()
    {
        return 9.0;
    }
}
