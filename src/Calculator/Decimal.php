<?php

namespace Pdam\Calculator;

use Pdam\Behavior\Decimal\Addition;
use Pdam\Behavior\Decimal\Division;
use Pdam\Behavior\Decimal\Multiplication;
use Pdam\Behavior\Decimal\Substraction;
use Pdam\Calculator;

class Decimal extends Calculator
{
    public function __construct()
    {
        $additionBehavior = new Addition();
        $divisionBehavior = new Division();
        $substractionBehavior = new Substraction();
        $multiplicationBehavior = new Multiplication();

        parent::__construct(
            $additionBehavior,
            $divisionBehavior,
            $substractionBehavior,
            $multiplicationBehavior
        );
    }
}
