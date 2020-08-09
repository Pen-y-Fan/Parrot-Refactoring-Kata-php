<?php

declare(strict_types=1);

namespace Parrot;

class Parrot
{
    /**
     * @var AbstractParrot
     */
    private $parrot;

    public function __construct(int $type, int $numberOfCoconuts, float $voltage, bool $isNailed)
    {
        $this->parrot = (new ParrotFactory())->createParrot($type, $numberOfCoconuts, $voltage, $isNailed);
    }

    public function getSpeed(): float
    {
        return $this->parrot->getSpeed();
    }
}
