<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

class ParrotFactory
{
    public function createParrot(int $type, int $numberOfCoconuts, float $voltage, bool $isNailed): AbstractParrot
    {
        switch ($type) {
            case ParrotTypeEnum::EUROPEAN:
                return new EuropeanParrot($type, $numberOfCoconuts, $voltage, $isNailed);
            case ParrotTypeEnum::AFRICAN:
                return new AfricanParrot($type, $numberOfCoconuts, $voltage, $isNailed);
            case ParrotTypeEnum::NORWEGIAN_BLUE:
                return new NorwegianParrot($type, $numberOfCoconuts, $voltage, $isNailed);
        }
        throw new Exception('Should be unreachable');
    }
}
