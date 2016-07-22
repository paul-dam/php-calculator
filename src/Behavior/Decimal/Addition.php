<?php

namespace Pdam\Behavior\Decimal;

use Pdam\Behavior\AdditionInterface;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Addition implements AdditionInterface
{
    public function execute($a, $b)
    {
        return $a + $b;
    }
}
