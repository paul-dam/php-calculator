<?php 

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
abstract class Calculator/*{{{*/
{
    protected $_additionInterface;

    public abstract function doAddition($a, $b);
    public abstract function doSubstraction($a, $b);
    public abstract function doMultiplication($a, $b);
    public abstract function doDivision($a, $b);
}/*}}}*/
