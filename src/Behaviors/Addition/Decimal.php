<?php

namespace Pdam\Behaviors\Addition;

use Pdam\Behaviors\Addition;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Decimal implements Addition
{
    public function execute($a, $b)
    {
        return $a + $b;
    }
}
