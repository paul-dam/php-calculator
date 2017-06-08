<?php namespace Pdam\Calculator;

use Pdam\Behavior\Complex\Addition;
use Pdam\Behavior\Complex\Division;
use Pdam\Behavior\Complex\Multiplication;
use Pdam\Behavior\Complex\Substraction;
use Pdam\Calculator;

class Complex extends Calculator
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
