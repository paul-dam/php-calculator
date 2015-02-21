<?php

class ComplexCalculator extends Calculator
{
    public function __construct() 
    {
        $this->_additionBehavior = new ComplexAdditionBehavior();
        $this->_divisionBehavior = new ComplexDivisionBehavior();
        $this->_substractionBehavior = new ComplexSubstractionBehavior();
        $this->_multiplicationBehavior = new ComplexMultiplicationBehavior();
    }
}
