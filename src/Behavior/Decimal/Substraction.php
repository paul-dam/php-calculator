<?php namespace Pdam\Behavior\Decimal;

use Pdam\Behavior\SubstractionInterface;

class Substraction implements SubstractionInterface
{
    public function __construct(\Pdam\Behavior\AdditionInterface $addition)
    {
        $this->addition = $addition;
    }

    public function execute($a, $b)
    {
        return $this->addition->execute($a, (- $b));
    }
}
