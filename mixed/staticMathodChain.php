<?php
class Calculator
{
    public static $number = 0;
   
    public static function add($value)
    {
        self::$number += $value;
        return __CLASS__;
    }
    public function subtract($value)
    {
        self::$number -= $value;
        return __CLASS__;
    }
    public static function multiply($value)
    {
        self::$number *= $value;
        return __CLASS__;
    }
    public static function result()
    {
        return self::$number;
    }

}
echo Calculator::add(10)::subtract(5)::multiply(10)::result();
echo "\n";