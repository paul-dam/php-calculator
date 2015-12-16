<?php namespace Pdam\Behaviors\Substraction;

use Pdam\Behaviors\Substraction;
use Pdam\Struct\Complex as StructComplex;

class Complex implements Substraction
{
    public function execute($left, $right)
    {
        $result = new StructComplex();
        $result->setRe($left->getRe() - $right->getRe());
        $result->setIm($left->getIm() - $right->getIm());

        return($result);
    }
}
