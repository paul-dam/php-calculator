<?php

namespace Pdam\Behavior\Complex;

use Pdam\Behavior\DivisionInterface;
use Pdam\Struct\Complex as StructComplex;

class Division implements DivisionInterface
{
    public function execute($numenator, $denominator)
    {
        $result = new StructComplex();
        if (0 == $denominator->getRe()
            && 0 == $denominator->getIm()
        ) {
            throw new \InvalidArgumentException(
                'None of rational and imaginary part of denominator can not be 0.'
            );
        }

        $result->setRe(
            (
                ($numenator->getRe() * $denominator->getRe())
                + ($numenator->getIm() * $denominator->getIm())
            )
            / (
                pow($denominator->getRe(), 2)
                + pow($denominator->getIm(), 2)
            )
        );
        $result->setIm(
            (
                ($numenator->getIm() * $denominator->getRe())
                - ($numenator->getRe() * $denominator->getIm())
            )
            / (
                pow($denominator->getRe(), 2)
                 + pow($denominator->getIm(), 2)
            )
        );

        return $result;
    }
}
