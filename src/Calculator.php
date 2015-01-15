<?php 

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Calculator/*{{{*/
{
    private $_result;

    public function __construct()/*{{{*/
    {
        $this->_result = 0;
    }/*}}}*/

    public function add($a = 0, $b = 0)/*{{{*/
    {
        $this->_result = $a + $b;
        return $this->_result;
    }/*}}}*/

    public function substract($a, $b)/*{{{*/
    {
        $this->_result = $a - $b;
        return $this->_result;
    }/*}}}*/

    public function multiply($a, $b)/*{{{*/
    {
        $this->_result = $a * $b;
        return $this->_result;
    }/*}}}*/

    public function divide($a, $b)/*{{{*/
    {
        if (!$b) {
            throw new InvalidArgumentException('Division by zero.');
        }

        $this->_result = $a / $b;
        return $this->_result;
    }/*}}}*/

    public function getResult()/*{{{*/
    {
        return $this->_result;
    }/*}}}*/
}/*}}}*/
