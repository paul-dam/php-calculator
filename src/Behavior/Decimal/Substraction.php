<?php namespace Pdam\Behavior\Decimal;

use Pdam\Behavior\SubstractionInterface;

class Substraction implements SubstractionInterface
{
    public function execute($a, $b)
    {
        return $a - $b;
    }
}
