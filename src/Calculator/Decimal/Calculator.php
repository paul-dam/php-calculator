<?php

class DecimalCalculator extends Calculator
{
    public function __construct() 
    {
        $this->_additionBehavior = new DecimalAdditionBehavior();
        $this->_divisionBehavior = new DecimalDivisionBehavior();
        $this->_substractionBehavior = new DecimalSubstractionBehavior();
        $this->_multiplicationBehavior = new DecimalMultiplicationBehavior();
    }
}
