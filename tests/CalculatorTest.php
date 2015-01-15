<?php

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct() /*{{{*/
    {
        $calculator = new Calculator();
        $this->assertEquals(0, $calculator->getResult());
    }/*}}}*/

    /**
     * testSuccessAdd
     * @dataProvider additionProvider
     */
    public function testSuccessAdd($a, $b, $expected) /*{{{*/
    {
        $calculator = new Calculator();
        $this->assertEquals($expected, $calculator->add($a, $b));
        $this->assertNotEquals($expected+1, $calculator->add($a, $b));
    }/*}}}*/

    public function additionProvider()/*{{{*/
    {
        return array(
            array(0, 0, 0),
            array(1, 0, 1),
            array(0, 1, 1),
            array(1, 1, 2),
            array(0.5, 0.5, 1),
            array(0.75, 0.75, 1.5),
            array(-1, 0, -1),
            array(0, -1, -1),
            array(-1, -1, -2),
            array(-0.5, 0.5, 0),
            array(-0.75, 0.75, 0),
        ); 
    }/*}}}*/

    /**
     * testSubstract
     * @dataProvider substractionProvider
     */
    public function testSubstract($a, $b, $expected)/*{{{*/
    {
        $calculator = new Calculator();
        $this->assertEquals($expected, $calculator->substract($a, $b));
        $this->assertNotEquals($expected -1, $calculator->substract($a, $b));
    }/*}}}*/

    public function substractionProvider()/*{{{*/
    {
        return array(
            array(0, 0, 0),
            array(1, 0, 1),
            array(0, 1, -1),
            array(1, 1, 0)
        );
    }/*}}}*/

    /**
     * testMultiplication
     * @dataProvider multiplicationProvider
     */
    public function testMultiplication($a, $b, $expected)/*{{{*/
    {
        $calculator = new Calculator();
        $this->assertEquals($expected, $calculator->multiply($a, $b));
        $this->assertNotEquals($expected-1, $calculator->multiply($a, $b));
    }/*}}}*/

    public function multiplicationProvider() /*{{{*/
    {
        return array(
            array(0, 0, 0),
            array(1, 0, 0),
            array(0, 1, 0),
            array(1, 1, 1)
        );
    }/*}}}*/

    /**
     * testDivision
     */
    public function testDivision()/*{{{*/
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->divide(4, 2));
        $this->assertEquals(2, $calculator->divide(10, 5));
        $this->assertNotEquals(2, $calculator->divide(10, 3));
        $this->assertEquals(2.5, $calculator->divide(10, 4));
    }/*}}}*/

    /**
     * testDivisionByZero
     * @expectedException InvalidArgumentException
     */
    public function testDivisionByZero()
    {
        $calculator = new Calculator();
        $this->assertEquals(0, $calculator->divide(3, 0));
    }
}

