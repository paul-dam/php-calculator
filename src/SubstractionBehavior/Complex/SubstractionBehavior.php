<?php

class ComplexSubstractionBehavior implements SubstractionBehavior
{
    public function execute($left, $right)
    {

        $result = new Complex();
        $result->setRe($left->getRe() - $right->getRe());
        $result->setIm($left->getIm() - $right->getIm());

        return($result);
    }
}
