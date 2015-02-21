<?php

class ComplexDivisionBehavior implements DivisionBehavior
{
    public function execute($left, $right)
    {
        $result = new Complex();
        if (0 == $right->getRe() && 0 == $right->getIm()) {
            throw new InvalidArgumentException('At least one of the real part and the imaginary part of the denominator must be nonzero for division to be defined.');
        }

        $result->setRe((($left->getRe() * $right->getRe()) + ($left->getIm() * $right->getIm()))/(pow($right->getRe(), 2) + pow($right->getIm(), 2)));
        $result->setIm((($left->getIm() * $right->getRe()) - ($left->getRe() * $right->getIm()))/(pow($right->getRe(), 2) + pow($right->getIm(), 2)));

        return($result);
    }
}
