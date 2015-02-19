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
    public function testDoAddition()
    {
    }

    public function additionProvider()
    {
        return array(
            array(new Complex(1, 1), new Complex(1, 1), new Complex(2, 2)),
        );
    }
}
