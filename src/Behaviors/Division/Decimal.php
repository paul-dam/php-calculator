<?php

namespace Pdam\Behaviors\Division;

use Pdam\Behaviors\Division;

class Decimal implements Division
{
    public function execute($numerator, $denominator)
    {
        if (0 === $denominator) {
            throw new \InvalidArgumentException(
                'Drugi argument dzielenia nie może wynosić 0'
            );
        }

        return $numerator / $denominator;
    }
}
