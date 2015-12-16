<?php namespace Pdam\Calculator;

use \Pdam\Behaviors\Addition\Decimal as DecimalAdditionBehavior;
use \Pdam\Behaviors\Division\Decimal as DecimalDivisionBehavior;
use \Pdam\Behaviors\Substraction\Decimal as DecimalSubstractionBehavior;
use \Pdam\Behaviors\Multiplication\Decimal as DecimalMultiplicationBehavior;
use \Pdam\Calculator;

class Decimal extends Calculator
{
    public function __construct() 
    {
        $this->_additionBehavior = new DecimalAdditionBehavior();
        $this->_divisionBehavior = new DecimalDivisionBehavior();
        $this->_substractionBehavior = new DecimalSubstractionBehavior();
        $this->_multiplicationBehavior = new DecimalMultiplicationBehavior();
    }
}
