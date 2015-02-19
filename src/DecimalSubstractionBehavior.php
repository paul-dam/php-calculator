<?php

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.UnusedLocalVariable)
 */
class DecimalSubstractionBehavior implements SubstractionBehavior
{
    public function execute($a, $b)
    {
        return ($a - $b);
    }
}

