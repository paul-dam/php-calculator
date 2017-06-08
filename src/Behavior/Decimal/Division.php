<?php namespace Pdam\Behavior\Decimal;

use Pdam\Behavior\DivisionInterface;

class Division implements DivisionInterface
{
    public function execute($numerator, $denominator)
    {
        if (0 === $denominator) {
            throw new \InvalidArgumentException(
                'Denominator cannot be `0`';
            );
        }

        return $numerator / $denominator;
    }
}
