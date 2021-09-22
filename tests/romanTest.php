<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class romanTest extends TestCase
{
    public function testIsDecimalToRoman()
    {
        $this->assertEquals('I', Roman::decimalToRoman(1));
        $this->assertEquals('V', Roman::decimalToRoman(5));
        $this->assertEquals('IX', Roman::decimalToRoman(9));
        $this->assertEquals('XX', Roman::decimalToRoman(20));

    }


    // public function testNonDecimalToRoman()
    // {

    // }
}