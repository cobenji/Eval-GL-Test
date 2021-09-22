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

    public function testIsRomanToDecimal()
    {
        $this->assertEquals(1, Roman::romanToDecimal('I'));
        $this->assertEquals(5, Roman::romanToDecimal('V'));
        $this->assertEquals(9, Roman::romanToDecimal('IX'));
        $this->assertEquals(20, Roman::romanToDecimal('XX'));

    }

    public function testIsNotDecimalToRoman()
    {
        $this->assertEquals(false, Roman::decimalToRoman(3008),'Supérieur à 3000');
    }

    public function testIsNotRomanToDecimal()
    {
        $this->assertEquals(false, Roman::romanToDecimal('MMMVII'),'Supérieur à 3000');
    }

}