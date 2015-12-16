<?php namespace Pdam\Behaviors\Division;

use Pdam\Behaviors\Division;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.UnusedLocalVariable)
 */
class Decimal implements Division
{
    public function execute($a, $b)
    {
        if (0 === $b) 
            throw new \InvalidArgumentException(
                'Drugi argument dzielenia nie może wynosić 0'
            );
        else
            return $a / $b;
    }
}
