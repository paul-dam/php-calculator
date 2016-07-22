<?php

namespace Pdam\Calculator;

use Pdam\Behavior\Complex\Addition;
use Pdam\Behavior\Complex\Division;
use Pdam\Behavior\Complex\Multiplication;
use Pdam\Behavior\Complex\Substraction;
use Pdam\Calculator;

class Complex extends Calculator
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
