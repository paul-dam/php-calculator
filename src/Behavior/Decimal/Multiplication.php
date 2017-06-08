<?php namespace Pdam\Behavior\Decimal;

use Pdam\Behavior\MultiplicationInterface;

class Multiplication implements MultiplicationInterface
{
    public function execute($left, $right)
    {
        return $left * $right;
    }
}
