<?php

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.UnusedLocalVariable)
 */
class DecimalDivisionBehavior implements DivisionBehavior
{
    public function doDivision($a, $b)
    {
        if (0 === $b) 
            throw new InvalidArgumentException(
                'Drugi argument dzielenia nie może wynosić 0'
            );
        else
            return $a / $b;
    }
}
