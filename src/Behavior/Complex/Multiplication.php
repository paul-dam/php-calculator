<?php namespace Pdam\Behavior\Complex;

use Pdam\Behavior\MultiplicationInterface;
use Pdam\Struct\Complex as StructComplex;

/**
 * Complex MultiplicationBehavior.
 */
class Multiplication implements MultiplicationInterface
{
    public function execute($left, $right)
    {
        $result = new StructComplex();
        $result->setRe(($left->getRe() * $right->getRe()) - ($left->getIm() * $right->getIm()));
        $result->setIm(($left->getIm() * $right->getRe()) + ($left->getRe() * $right->getIm()));

        return $result;
    }
}
