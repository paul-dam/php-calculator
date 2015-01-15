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
        $this->assertEqual($expected, $calculator->doAddition($a, $b));
    }/*}}}*/

    public function additionProvider()/*{{{*/
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 3)
        );
    }/*}}}*/
}

