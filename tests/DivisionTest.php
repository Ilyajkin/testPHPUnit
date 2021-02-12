<?php
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function testDivision()
    {
        $subtraction = new Calculator();
        $expected = 2;
        $actual = $subtraction->Division(4, 2);
        $this->assertSame($expected, $actual);
    }

    public function testCheckDivisionByZero()
    {
        $subtraction = new Calculator();
        $expected = 3;
        $actual = $subtraction->Division(3, 0);
        $this->assertSame($expected, $actual);
    }
}