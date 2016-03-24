<?php namespace Pdam;

use Pdam\Behaviors\Addition;
use Pdam\Behaviors\Division;
use Pdam\Behaviors\Substraction;
use Pdam\Behaviors\Multiplication;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.UnusedLocalVariable)
 */
abstract class Calculator
{
    protected $additionBehavior;
    protected $substractionBehavior;
    protected $multiplicationBehavior;
    protected $divisionBehavior;

    public function __construct(
        Addition $additionBehavior,
        Division $divisionBehavior,
        Substraction $substractionBehavior,
        Multiplication $multiplicationBehavior
    ) {
        $this->additionBehavior = $additionBehavior;
        $this->divisionBehavior = $divisionBehavior;
        $this->substractionBehavior = $substractionBehavior;
        $this->multiplicationBehavior = $multiplicationBehavior;
    }


    public function doAddition($a, $b)
    {
        return $this->additionBehavior->execute($a, $b);
    }

    public function doSubstraction($a, $b)
    {
        return $this->substractionBehavior->execute($a, $b);
    }

    public function doMultiplication($a, $b)
    {
        return $this->multiplicationBehavior->execute($a, $b);
    }

    public function doDivision($a, $b)
    {
        return $this->divisionBehavior->execute($a, $b);
    }

    public function setAdditionBehavior($behavior)
    {
        $this->additionBehavior = $behavior;
    }

    public function setSubstractionBehavior($behavior)
    {
        $this->substractionBehavior = $behavior;
    }

    public function setDivisionBehavior($behavior)
    {
        $this->divisionBehavior = $behavior;
    }

    public function setMultiplicationBehavior($behavior)
    {
        $this->multiplicationBehavior = $behavior;
    }
}
