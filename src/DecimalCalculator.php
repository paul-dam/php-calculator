<?php

class DecimalCalculator extends Calculator
{
    public function __construct() 
    {
        $this->_additionBehavior = new DecimalAdditionBehavior();
    }
}
