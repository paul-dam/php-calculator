<?php

class ComplexDivisionBehavior implements DivisionBehavior
{
    public function execute($left, $right)
    {
        throw new Exception('Not implemented');
    }
}
