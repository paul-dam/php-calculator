<?php

class DecimalCalculator extends Calculator
{
    private $_additionInterface;

    public function __construct() 
    {
        $this->_additionBehavior = new DecimalAdditionBehavior();
    }
}
