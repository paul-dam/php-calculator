<?php

namespace Pdam\Behaviors\Substraction;

use Pdam\Behaviors\Substraction;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.UnusedLocalVariable)
 */
class Decimal implements Substraction
{
    public function execute($a, $b)
    {
        return $a - $b;
    }
}
