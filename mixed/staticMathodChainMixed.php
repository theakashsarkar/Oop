<?php
class Calculator
{
    public static $number = 0;
   
    public static function add($value)
    {
        static::$number += $value;
        return new static;
    }
    public function subtract($value)
    {
        static ::$number -= $value;
        return new static;
    }
    public static function multiply($value)
    {
        static::$number *= $value;
        return new static;
    }
    public static function result()
    {
        return self::$number;
    }

}
echo Calculator::add(10)->subtract(5)->multiply(10)->result();
echo "\n";