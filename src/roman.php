<?php declare(strict_types=1);


final class Roman{

    protected static $romanArray = array(
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


    public static function decimalToRoman(int $number)
    {
        $result = '';
        
        if($number > 3000)
        {
            return false;
        }

        foreach(self::$romanArray as $roman => $value)
        {
            $matches = intval($number/$value);
            $result .= str_repeat($roman,$matches);
            $number = $number % $value;
        }
        return $result;
    }

    public static function romanToDecimal(string $roman)
    {
        $result = 0;

        foreach (self::$romanArray as $key => $value) {
            while (strpos($roman, $key) === 0) {
                $result += $value;
                $roman = substr($roman, strlen($key));
            }
        }

        if($result > 3000)
        {
            return false;
        }
        return $result;
    }
    
}
