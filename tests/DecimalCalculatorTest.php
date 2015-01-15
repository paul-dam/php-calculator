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
    public function testDoAddition($a, $b, $expected)
    {
        $calculator = new DecimalCalculator();
        $this->assertEqual($expected, $calculator->doAddition($a, $b));
    }
}

