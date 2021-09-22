<?php declare(strict_types=1);


final class Roman{

    public static function decimalToRoman(int $number)
    {
        $result = '';
        $romanArray = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1);

        foreach($romanArray as $roman => $value)
        {
            $matches = intval($number/$value);              
            $result .= str_repeat($roman,$matches);
            $number = $number % $value;
        }
        return $result;
    }

    public static function romanToDecimal(string $roman)
    {
        $result = '';
        echo('oui');
        return $result;
    }
    
}
