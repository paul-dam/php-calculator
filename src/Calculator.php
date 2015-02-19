<?php 

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.UnusedLocalVariable)
 */
abstract class Calculator/*{{{*/
{
    protected $_additionBehavior;
    protected $_substractionBehavior;
    protected $_multiplicationBehavior;
    protected $_divisionBehavior;

    public function doAddition($a, $b)/*{{{*/
    {
        return $this->_additionBehavior->execute($a, $b);
    }/*}}}*/
    public function doSubstraction($a, $b)/*{{{*/
    {
        return $this->_substractionBehavior->execute($a, $b);
    }/*}}}*/
    public function doMultiplication($a, $b)/*{{{*/
    {
        return $this->_multiplicationBehavior->execute($a, $b);
    }/*}}}*/
    public function doDivision($a, $b)/*{{{*/
    {
        return $this->_divisionBehavior->execute($a, $b);
    }/*}}}*/
    public function setAdditionBehavior($behavior)/*{{{*/
    {
        $this->_additionBehavior = $behavior;
    }/*}}}*/
    public function setSubstractionBehavior($behavior)/*{{{*/
    {
        $this->_substractionBehavior = $behavior;
    }/*}}}*/
}/*}}}*/
