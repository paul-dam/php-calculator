<?php namespace Pdam\Behaviors\Multiplication;

use \Pdam\Behaviors\Multiplication;
use \Pdam\Struct\Complex as StructComplex;

/**
 * Complex MultiplicationBehavior
 */
class Complex implements Multiplication
{
    public function execute($left, $right)
    {
        $result = new StructComplex();
        $result->setRe(( $left->getRe() * $right->getRe() ) - ( $left->getIm() * $right->getIm() ));
        $result->setIm(( $left->getIm() * $right->getRe() ) + ( $left->getRe() * $right->getIm() ));

        return($result);
    }
}
