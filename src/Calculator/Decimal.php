<?php namespace Pdam\Calculator;

use Pdam\Behavior\Decimal\Addition;
use Pdam\Behavior\Decimal\Division;
use Pdam\Behavior\Decimal\Multiplication;
use Pdam\Behavior\Decimal\Substraction;
use Pdam\Calculator;

class Decimal extends Calculator
{
    public function __construct()
    {
        $addition = new Addition();
        $division = new Division();
        $substraction = new Substraction();
        $multiplication = new Multiplication();

        parent::__construct(
            $addition,
            $division,
            $substraction,
            $multiplication
        );
    }
}
