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

    public function doAddition($a, $b)/*{{{*/
    {
        return $this->_additionBehavior->add($a, $b);
    }/*}}}*/

    public function doSubstraction($a, $b)/*{{{*/
    {
        return $this->$_substractionBehavior->substract($a, $b);
    }/*}}}*/

    public function doMultiplication($a, $b)/*{{{*/
    {
        return $this->$_multiplicationBehavior->multiply($a, $b);
    }/*}}}*/

    public function doDivision($a, $b)/*{{{*/
    {
        return $this->$_divisionBehavior->divide($a, $b);
    }/*}}}*/

    public function setAdditionBehavior($behavior)/*{{{*/
    {
        $this->$_additionBehavior = $behavior;
    }/*}}}*/
}/*}}}*/
