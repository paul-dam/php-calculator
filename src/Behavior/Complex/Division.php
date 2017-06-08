<?php namespace Pdam\Behavior\Complex;

use Pdam\Behavior\DivisionInterface;
use Pdam\Struct\Complex as StructComplex;

class Division implements DivisionInterface
{
    public function execute($numerator, $denominator)
    {
        $result = new StructComplex();
        if (0 == $denominator->getRe()
            && 0 == $denominator->getIm()
        ) {
            throw new \InvalidArgumentException(
                'None of rational and imaginary part of denominator can not be 0.'
            );
        }

        $result->setRe($this->calculateRational($numerator, $denominator));
        $result->setIm($this->calculateImaginary($numerator, $denominator));

        return $result;
    }

    private function calculateRational($numerator, $denominator)
    {
        return (
            ($numerator->getRe() * $denominator->getRe())
            + ($numerator->getIm() * $denominator->getIm())
        ) / ($this->powerReSumIm($denominator, 2));
    }

    private function calculateImaginary($numerator, $denominator)
    {
        return (
            ($numerator->getIm() * $denominator->getRe())
            - ($numerator->getRe() * $denominator->getIm())
        ) / ($this->powerReSumIm($denominator, 2));
    }

    private function powerReSumIm(StructComplex $subject, $times)
    {
        return pow($subject->getRe(), $times) + pow($subject->getIm(), $times);
    }
}
