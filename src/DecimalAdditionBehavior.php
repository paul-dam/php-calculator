<?php

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */

class DecimalAdditionBehavior implements AdditionBehavior
{
    public function doAddition($a, $b)
    {
        return $a + $b;
    }
}
