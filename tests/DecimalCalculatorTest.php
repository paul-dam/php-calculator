<?php

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class DecimalCalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * testDoAddition
     * @dataProvider additionProvider
     */
    public function testDoAddition($a, $b, $expected)/*{{{*/
    {
        $calculator = new DecimalCalculator();
        $this->assertEquals($expected, $calculator->doAddition($a, $b));
    }/*}}}*/

    public function additionProvider()/*{{{*/
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 2)
        );
    }/*}}}*/

    /**
     * testDoDivision
     * @dataProvider divisionProvider
     */
    public function testDoDivision($a, $b, $expected)/*{{{*/
    {
        $calculator = new DecimalCalculator();
        $this->assertEquals($expected, $calculator->doDivision($a, $b));
    }/*}}}*/

    public function divisionProvider()/*{{{*/
    {
        return array(
            array(0, 1, 0),
            array(1, 1, 1),
            array(2, 1, 2),
            array(1, 2, 0.5)
        );
    }/*}}}*/

    /**
     * testDoDivisionException
     * @dataProvider divisionProviderException
     * @expectedException InvalidArgumentException
     */
    public function testDoDivisionException($a, $b, $expected)/*{{{*/
    {
        $calculator = new DecimalCalculator();
        $this->assertEquals($expected, $calculator->doDivision($a, $b));
    } /*}}}*/

    public function divisionProviderException()/*{{{*/
    {
        return array(
            array(0, 0, 0),
            array(1, 0, 1),
        );
    }/*}}}*/

    /**
     * testDoSubstraction
     * @dataProvider substractionProvider
     */
    public function testDoSubstraction($a, $b, $expected)
    {
        $calculator = new DecimalCalculator();
        $this->assertEquals($expected, $calculator->doSubstraction($a, $b));
    }

    public function substractionProvider()
    {
        return array(
            array(0, 0, 0),
            array(1, 0, 1),
            array(1, 1, 0),
            array(0, 1, -1),
            array(2, 1, 1),
            array(1, 0.5, 0.5)
        );
    }


    /**
     * testDoSubstraction
     * @dataProvider multiplycationProvider
     */
    public function testDoMultiplication($a, $b, $expected)/*{{{*/
    {
        $actual = $this->_calculator->doMultiplication($a, $b);
        $this->assertEquals($expected, $actual);
    }/*}}}*/

    public function multiplycationProvider()
    {
        return array(
            array(0, 0, 0),
            array(1, 0, 0),
            array(0, 1, 0),
            array(1, 1, 1),
            array(7, 9, 63),
        );
    }
}

