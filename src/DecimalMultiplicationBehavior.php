<?php

class DecimalMultiplicationBehavior implements MultiplicationBehavior
{
    public function execute($left, $right)
    {
        return ($left * $right);
    }
}
