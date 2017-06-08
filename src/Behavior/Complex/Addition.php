<?php namespace Pdam\Behavior\Complex;

use Pdam\Behavior\AdditionInterface;
use Pdam\Struct\Complex as StructComplex;

class Addition implements AdditionInterface
{
    public function execute($left, $right)
    {
        $result = new StructComplex();
        $result->setRe($left->getRe() + $right->getRe());
        $result->setIm($left->getIm() + $right->getIm());

        return $result;
    }
}
