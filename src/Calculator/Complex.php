<?php namespace Pdam\Calculator;

use \Pdam\Behaviors\Addition\Complex as ComplexAdditionBehavior;
use \Pdam\Behaviors\Division\Complex as ComplexDivisionBehavior;
use \Pdam\Behaviors\Substraction\Complex as ComplexSubstractionBehavior;
use \Pdam\Behaviors\Multiplication\Complex as ComplexMultiplicationBehavior;
use \Pdam\Calculator;

class Complex extends Calculator
{
    public function __construct() 
    {
        $this->_additionBehavior = new ComplexAdditionBehavior();
        $this->_divisionBehavior = new ComplexDivisionBehavior();
        $this->_substractionBehavior = new ComplexSubstractionBehavior();
        $this->_multiplicationBehavior = new ComplexMultiplicationBehavior();
    }
}
