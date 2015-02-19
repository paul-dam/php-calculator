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

    public function testDoAddition()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
