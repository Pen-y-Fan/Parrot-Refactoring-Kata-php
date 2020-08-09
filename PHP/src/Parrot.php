<?php

namespace Parrot;

class Parrot
{
    /**
     * @var AbstractParrot
     */
    private $parrot;

    public function __construct($type, $numberOfCoconuts, $voltage, $isNailed)
    {
        $this->parrot = (new ParrotFactory())->createParrot($type, $numberOfCoconuts, $voltage, $isNailed);
    }

    public function getSpeed()
    {
        return $this->parrot->getSpeed();
    }
}
