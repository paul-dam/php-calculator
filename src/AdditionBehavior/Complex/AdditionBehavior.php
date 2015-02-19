<?php

class ComplexAdditionBehavior implements AdditionBehavior
{
    public function execute($left, $right)
    {
        $result = new Complex();
        $result->re($left->re() + $right->re());
        $result->im($left->im() + $right->im());

        return($result);
    }
}
