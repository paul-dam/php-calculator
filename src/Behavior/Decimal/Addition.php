<?php namespace Pdam\Behavior\Decimal;

use Pdam\Behavior\AdditionInterface;

class Addition implements AdditionInterface
{
    public function execute($left, $right)
    {
        return $left + $right;
    }
}
