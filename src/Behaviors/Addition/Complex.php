<?php namespace Pdam\Behaviors\Addition;

use \Pdam\Behaviors\Addition;
use \Pdam\Struct\Complex as StructComplex;

class Complex implements Addition
{
    public function execute($left, $right)
    {
        $result = new StructComplex();
        $result->setRe($left->getRe() + $right->getRe());
        $result->setIm($left->getIm() + $right->getIm());

        return($result);
    }
}
