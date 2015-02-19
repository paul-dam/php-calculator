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

    public function testTrue()
    {
        $this->assertEquals(true, true);
    }

    /**
     * testDoAddition
     * @dataProvider additionProvider
     */
    public function testDoAddition($a, $b, $expected)
    {
        $actual = $this->_calculator->doAddition($a, $b);
        assertEquals($expected, $actual);
    }

    public function additionProvider()
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
    }
}
