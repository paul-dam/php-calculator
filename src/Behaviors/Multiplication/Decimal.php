<?php namespace Pdam\Behaviors\Multiplication;

use Pdam\Behaviors\Multiplication;

class Decimal implements Multiplication
{
    public function execute($left, $right)
    {
        return ($left * $right);
    }
}
