<?php

namespace Parrot;

abstract class AbstractParrot
{
    /**
     * @var int ParrotTypeEnum
     */
    private $type;
    /**
     * @var int
     */
    protected $numberOfCoconuts;
    /**
     * @var float
     */
    protected $voltage;
    /**
     * @var bool
     */
    protected $isNailed;

    public function __construct(int $type, float $numberOfCoconuts, float $voltage, bool $isNailed)
    {
        $this->type = $type;
        $this->numberOfCoconuts = $numberOfCoconuts;
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    protected function getBaseSpeed(): float
    {
        return 12.0;
    }

    public function getSpeed(): float
    {
        return $this->getBaseSpeed();
    }
}
