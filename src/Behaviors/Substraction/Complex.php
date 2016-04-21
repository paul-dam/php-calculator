<?php

namespace Pdam\Behaviors\Substraction;

use Pdam\Behaviors\Addition\Complex as ComplexAdditionBehavior;
use Pdam\Behaviors\Substraction;

class Complex extends ComplexAdditionBehavior implements Substraction
{
    public function execute($left, $right)
    {
        $right->setRe(0 - $right->getRe());
        $right->setIm(0 - $right->getIm());

        return parent::execute($left, $right);
    }
}
