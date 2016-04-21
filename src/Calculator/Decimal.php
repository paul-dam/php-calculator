<?php

namespace Pdam\Calculator;

use Pdam\Behaviors\Addition\Decimal as DecimalAdditionBehavior;
use Pdam\Behaviors\Division\Decimal as DecimalDivisionBehavior;
use Pdam\Behaviors\Multiplication\Decimal as DecimalMultiplicationBehavior;
use Pdam\Behaviors\Substraction\Decimal as DecimalSubstractionBehavior;
use Pdam\Calculator;

class Decimal extends Calculator
{
    public function __construct()
    {
        $additionBehavior = new DecimalAdditionBehavior();
        $divisionBehavior = new DecimalDivisionBehavior();
        $substractionBehavior = new DecimalSubstractionBehavior();
        $multiplicationBehavior = new DecimalMultiplicationBehavior();

        parent::__construct(
            $additionBehavior,
            $divisionBehavior,
            $substractionBehavior,
            $multiplicationBehavior
        );
    }
}
