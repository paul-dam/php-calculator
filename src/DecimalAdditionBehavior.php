<?php

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */

class DecimalAdditionBehavior implements AdditionBehavior
{
    public function execute($a, $b)
    {
        return $a + $b;
    }
}
