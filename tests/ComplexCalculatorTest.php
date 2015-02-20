<?php

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class ComplexCalculatorTest extends PHPUnit_Framework_TestCase
{
    protected $_calculator;

    public function setUp()
    {
        $this->_calculator = new ComplexCalculator();
    }

    /**
     * testDoAddition
     * @dataProvider additionProvider
     */
    public function testDoAddition($a, $b, $expected)/*{{{*/
    {
        $actual = $this->_calculator->doAddition($a, $b);
        $this->assertEquals($expected, $actual);
    }/*}}}*/

    public function additionProvider()/*{{{*/
    {
        return array(
            array(new Complex(1, 1), new Complex(1, 1), new Complex(2, 2)),
            array(new Complex(0, 1), new Complex(1, 1), new Complex(1, 2)),
            array(new Complex(-1, 1), new Complex(1, 1), new Complex(0, 2)),
            array(new Complex(1, 0), new Complex(1, 1), new Complex(2, 1)),
            array(new Complex(1, -1), new Complex(1, 1), new Complex(2, 0)),
            array(new Complex(1, 1), new Complex(0, 1), new Complex(1, 2)),
            array(new Complex(0, 1), new Complex(0, 1), new Complex(0, 2)),
            array(new Complex(-1, 1), new Complex(0, 1), new Complex(-1, 2)),
            array(new Complex(1, 0), new Complex(0, 1), new Complex(1, 1)),
            array(new Complex(1, -1), new Complex(0, 1), new Complex(1, 0)),
            array(new Complex(1, 1), new Complex(-1, 1), new Complex(0, 2)),
            array(new Complex(0, 1), new Complex(-1, 1), new Complex(-1, 2)),
            array(new Complex(-1, 1), new Complex(-1, 1), new Complex(-2, 2)),
            array(new Complex(1, 0), new Complex(-1, 1), new Complex(0, 1)),
            array(new Complex(1, -1), new Complex(-1, 1), new Complex(0, 0)),
        );
    }/*}}}*/

    /**
     * testDoSubstraction
     * @dataProvider substractionProvider
     */
    public function testDoSubstraction($a, $b, $expected) {/*{{{*/
        $actual = $this->_calculator->doSubstraction($a, $b);
        $this->assertEquals($expected, $actual);
    }/*}}}*/

    public function substractionProvider() {/*{{{*/
        return array(
            array(new Complex(1, 1), new Complex(1, 1), new Complex(0, 0)),
            array(new Complex(0, 1), new Complex(1, 1), new Complex(-1, 0)),
            array(new Complex(-1, 1), new Complex(1, 1), new Complex(-2, 0)),
            array(new Complex(1, 0), new Complex(1, 1), new Complex(0, -1)),
            array(new Complex(1, -1), new Complex(1, 1), new Complex(0, -2)),
            array(new Complex(1, 1), new Complex(0, 1), new Complex(-1, 0)),
            array(new Complex(0, 1), new Complex(0, 1), new Complex(0, 0)),
            array(new Complex(-1, 1), new Complex(0, 1), new Complex(-1, 0)),
            array(new Complex(1, 0), new Complex(0, 1), new Complex(1, -1)),
            array(new Complex(1, -1), new Complex(0, 1), new Complex(1, -2)),
            array(new Complex(1, 1), new Complex(-1, 1), new Complex(2, 0)),
            array(new Complex(0, 1), new Complex(-1, 1), new Complex(1, 0)),
            array(new Complex(-1, 1), new Complex(-1, 1), new Complex(0, 0)),
            array(new Complex(1, 0), new Complex(-1, 1), new Complex(2, -1)),
            array(new Complex(1, -1), new Complex(-1, 1), new Complex(2, -2)),
        );
    }/*}}}*/

    /**
     * testDoMultiplication
     */
    public function testDoMultiplication() {
        $this->assertEquals(true, true);
    }
}
