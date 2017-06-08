<?php namespace Pdam;

use Pdam\Behavior\AdditionInterface;
use Pdam\Behavior\DivisionInterface;
use Pdam\Behavior\MultiplicationInterface;
use Pdam\Behavior\SubstractionInterface;

abstract class Calculator
{
    protected $addition;
    protected $substraction;
    protected $multiplication;
    protected $division;

    public function __construct(
        AdditionInterface $addition,
        DivisionInterface $division,
        SubstractionInterface $substraction,
        MultiplicationInterface $multiplication
    ) {
        $this->addition = $addition;
        $this->division = $division;
        $this->substraction = $substraction;
        $this->multiplication = $multiplication;
    }

    public function doAddition($a, $b)
    {
        return $this->addition->execute($a, $b);
    }

    public function doSubstraction($a, $b)
    {
        return $this->substraction->execute($a, $b);
    }

    public function doMultiplication($a, $b)
    {
        return $this->multiplication->execute($a, $b);
    }

    public function doDivision($a, $b)
    {
        return $this->division->execute($a, $b);
    }
}
