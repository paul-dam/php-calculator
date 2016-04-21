<?php

namespace Test\Pdam\Calculator;

use Pdam\Calculator\Complex as ComplexCalculator;
use Pdam\Struct\Complex;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class ComplexCalculatorTest extends \PHPUnit_Framework_TestCase
{
    protected $calculator;

    public function setUp()
    {
        $this->_calculator = new ComplexCalculator();
    }

    /**
     * testDoAddition.
     *
     * @dataProvider additionProvider
     */
    public function testDoAddition($a, $b, $expected)/*{{{*/
    {
        $actual = $this->_calculator->doAddition($a, $b);
        $this->assertEquals($expected, $actual);
    }

/*}}}*/

    public function additionProvider()/*{{{*/
    {
        return [
            [new Complex(1, 1), new Complex(1, 1), new Complex(2, 2)],
            [new Complex(0, 1), new Complex(1, 1), new Complex(1, 2)],
            [new Complex(-1, 1), new Complex(1, 1), new Complex(0, 2)],
            [new Complex(1, 0), new Complex(1, 1), new Complex(2, 1)],
            [new Complex(1, -1), new Complex(1, 1), new Complex(2, 0)],
            [new Complex(1, 1), new Complex(0, 1), new Complex(1, 2)],
            [new Complex(0, 1), new Complex(0, 1), new Complex(0, 2)],
            [new Complex(-1, 1), new Complex(0, 1), new Complex(-1, 2)],
            [new Complex(1, 0), new Complex(0, 1), new Complex(1, 1)],
            [new Complex(1, -1), new Complex(0, 1), new Complex(1, 0)],
            [new Complex(1, 1), new Complex(-1, 1), new Complex(0, 2)],
            [new Complex(0, 1), new Complex(-1, 1), new Complex(-1, 2)],
            [new Complex(-1, 1), new Complex(-1, 1), new Complex(-2, 2)],
            [new Complex(1, 0), new Complex(-1, 1), new Complex(0, 1)],
            [new Complex(1, -1), new Complex(-1, 1), new Complex(0, 0)],
        ];
    }

/*}}}*/

    /**
     * testDoSubstraction.
     *
     * @dataProvider substractionProvider
     */
    public function testDoSubstraction($a, $b, $expected)
    {/*{{{*/
        $actual = $this->_calculator->doSubstraction($a, $b);
        $this->assertEquals($expected, $actual);
    }

/*}}}*/

    public function substractionProvider()
    {/*{{{*/
        return [
            [new Complex(1, 1), new Complex(1, 1), new Complex(0, 0)],
            [new Complex(0, 1), new Complex(1, 1), new Complex(-1, 0)],
            [new Complex(-1, 1), new Complex(1, 1), new Complex(-2, 0)],
            [new Complex(1, 0), new Complex(1, 1), new Complex(0, -1)],
            [new Complex(1, -1), new Complex(1, 1), new Complex(0, -2)],
            [new Complex(1, 1), new Complex(0, 1), new Complex(1, 0)],
            [new Complex(0, 1), new Complex(0, 1), new Complex(0, 0)],
            [new Complex(-1, 1), new Complex(0, 1), new Complex(-1, 0)],
            [new Complex(1, 0), new Complex(0, 1), new Complex(1, -1)],
            [new Complex(1, -1), new Complex(0, 1), new Complex(1, -2)],
            [new Complex(1, 1), new Complex(-1, 1), new Complex(2, 0)],
            [new Complex(0, 1), new Complex(-1, 1), new Complex(1, 0)],
            [new Complex(-1, 1), new Complex(-1, 1), new Complex(0, 0)],
            [new Complex(1, 0), new Complex(-1, 1), new Complex(2, -1)],
            [new Complex(1, -1), new Complex(-1, 1), new Complex(2, -2)],
        ];
    }

/*}}}*/

    /**
     * testDoMultiplication.
     *
     * @dataProvider multiplicationProvider
     */
    public function testDoMultiplication($a, $b, $expected)
    {/*{{{*/
        $actual = $this->_calculator->doMultiplication($a, $b);
        $this->assertEquals($expected, $actual);
    }

/*}}}*/

    public function multiplicationProvider()/*{{{*/
    {
        return [
            [new Complex(1, 1), new Complex(1, 1), new Complex(0, 2)],
            [new Complex(2, 1), new Complex(1, 2), new Complex(0, 5)],
            [new Complex(0, 1), new Complex(1, 0), new Complex(0, 1)],
            [new Complex(-1, 1), new Complex(1, -1), new Complex(0, 2)],
            [new Complex(-2, 1), new Complex(1, -2), new Complex(0, 5)],
        ];
    }

/*}}}*/

    /**
     * testDoDivision.
     *
     * @dataProvider divisionProvider
     */
    public function testDoDivision($numenator, $denominator, $expected)
    {
        $actual = $this->_calculator->doDivision($numenator, $denominator);
        $this->assertEquals($expected, $actual);
    }

    public function divisionProvider()
    {
        return [
            [new Complex(1, 1), new Complex(1, 1), new Complex(1, 0)],
            [new Complex(2, 1), new Complex(1, 2), new Complex(0.8, -0.6)],
            [new Complex(0, 1), new Complex(1, 0), new Complex(0, 1)],
            [new Complex(-1, 1), new Complex(1, -1), new Complex(-1, 0)],
            [new Complex(-2, 1), new Complex(1, -2), new Complex(-0.8, -0.6)],
            [new Complex(-2, 1), new Complex(0, -2), new Complex(-0.5, -1)],
        ];
    }

    /**
     * testDoDivisionException.
     *
     * @dataProvider divisionExceptionProvider
     * @expectedException InvalidArgumentException
     */
    public function testDoDivisionException($numenator, $denominator, $expected)
    {
        $actual = $this->_calculator->doDivision($numenator, $denominator);
        $this->assertEquals($expected, $actual);
    }

    public function divisionExceptionProvider()
    {
        return [
            [new Complex(-2, 1), new Complex(0, 0), new Complex(-0.8, -0.6)],
        ];
    }
}
