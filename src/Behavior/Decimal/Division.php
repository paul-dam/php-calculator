<?php namespace Pdam\Behavior\Decimal;

use Pdam\Behavior\DivisionInterface;

class Division implements DivisionInterface
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
