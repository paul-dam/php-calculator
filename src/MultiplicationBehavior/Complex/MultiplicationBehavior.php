<?php

/**
 * Complex MultiplicationBehavior
 */
class ComplexMultiplicationBehavior implements MultiplicationBehavior
{
    public function execute($left, $right)
    {
        $result = new Complex();
        $result->setRe(( $left->getRe() * $right->getRe() ) - ( $left->getIm() * $right->getIm() ));
        $result->setIm(( $left->getIm() * $right->getRe() ) + ( $left->getRe() * $right->getIm() ));

        return($result);
    }
}
