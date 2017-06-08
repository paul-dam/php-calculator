<?php namespace Pdam\Behavior\Complex;

use Pdam\Behavior\Complex\Addition;
use Pdam\Behavior\SubstractionInterface;

class Substraction extends Addition implements SubstractionInterface
{
    public function execute($left, $right)
    {
        $right->setRe(0 - $right->getRe());
        $right->setIm(0 - $right->getIm());

        return parent::execute($left, $right);
    }
}
