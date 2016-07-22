<?php

namespace Pdam\Behavior\Decimal;

use Pdam\Behavior\SubstractionInterface;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.UnusedLocalVariable)
 */
class Substraction implements SubstractionInterface
{
    public function execute($a, $b)
    {
        return $a - $b;
    }
}
