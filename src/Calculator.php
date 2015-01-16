<?php 

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
abstract class Calculator/*{{{*/
{
    protected $_additionBehavior;
    protected $_substractionBehavior;
    protected $_multiplicationBehavior;
    protected $_divisionBehavior;

    public abstract function doMultiplication($a, $b);
    public abstract function doDivision($a, $b);
    public function doAddition($a, $b)/*{{{*/
    {
        return $this->_additionBehavior->add($a, $b);
    }/*}}}*/

    public function doSubstraction($a, $b)/*{{{*/
    {
        return $this->$_substractionBehavior->substract($a, $b);
    }/*}}}*/
}/*}}}*/
