<?php

namespace Test\Pdam\Calculator;

use Pdam\Calculator\Decimal as DecimalCalculator;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class DecimalCalculatorTest extends \PHPUnit_Framework_TestCase
{
    protected $_calculator;

    public function setUp()/*{{{*/
    {
        $this->_calculator = new DecimalCalculator();
    }

/*}}}*/

    /**
     * testDoAddition.
     *
     * @dataProvider additionProvider
     */
    public function testDoAddition($a, $b, $expected)/*{{{*/
    {
        $this->assertEquals($expected, $this->_calculator->doAddition($a, $b));
    }

/*}}}*/

    public function additionProvider()/*{{{*/
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2],
        ];
    }

/*}}}*/

    /**
     * testDoDivision.
     *
     * @dataProvider divisionProvider
     */
    public function testDoDivision($a, $b, $expected)/*{{{*/
    {
        $actual = $this->_calculator->doDivision($a, $b);
        $this->assertEquals($expected, $actual);
    }

/*}}}*/

    public function divisionProvider()/*{{{*/
    {
        return [
            [0, 1, 0],
            [1, 1, 1],
            [2, 1, 2],
            [1, 2, 0.5],
        ];
    }

/*}}}*/

    /**
     * testDoDivisionException.
     *
     * @dataProvider divisionProviderException
     * @expectedException InvalidArgumentException
     */
    public function testDoDivisionException($a, $b, $expected)/*{{{*/
    {
        $actual = $this->_calculator->doDivision($a, $b);
        $this->assertEquals($expected, $actual);
    }

 /*}}}*/

    public function divisionProviderException()/*{{{*/
    {
        return [
            [0, 0, 0],
            [1, 0, 1],
        ];
    }

/*}}}*/

    /**
     * testDoSubstraction.
     *
     * @dataProvider substractionProvider
     */
    public function testDoSubstraction($a, $b, $expected)/*{{{*/
    {
        $actual = $this->_calculator->doSubstraction($a, $b);
        $this->assertEquals($expected, $actual);
    }

/*}}}*/

    public function substractionProvider()/*{{{*/
    {
        return [
            [0, 0, 0],
            [1, 0, 1],
            [1, 1, 0],
            [0, 1, -1],
            [2, 1, 1],
            [1, 0.5, 0.5],
        ];
    }

/*}}}*/

    /**
     * testDoSubstraction.
     *
     * @dataProvider multiplycationProvider
     */
    public function testDoMultiplication($a, $b, $expected)/*{{{*/
    {
        $actual = $this->_calculator->doMultiplication($a, $b);
        $this->assertEquals($expected, $actual);
    }

/*}}}*/

    public function multiplycationProvider()
    {
        return [
            [0, 0, 0],
            [1, 0, 0],
            [0, 1, 0],
            [1, 1, 1],
            [7, 9, 63],
        ];
    }
}
