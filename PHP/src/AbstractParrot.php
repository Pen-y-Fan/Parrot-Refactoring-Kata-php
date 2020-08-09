<?php

declare(strict_types=1);

namespace Parrot;

abstract class AbstractParrot
{
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

    /**
     * @var int ParrotTypeEnum
     */
    private $type;

    public function __construct(int $type, int $numberOfCoconuts, float $voltage, bool $isNailed)
    {
        $this->type = $type;
        $this->numberOfCoconuts = $numberOfCoconuts;
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    public function getSpeed(): float
    {
        return $this->getBaseSpeed();
    }

    public function getType(): int
    {
        return $this->type;
    }

    protected function getBaseSpeed(): float
    {
        return 12.0;
    }
}
