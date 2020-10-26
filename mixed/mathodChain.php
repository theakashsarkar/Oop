<?php
class Calculator
{
    public $number = 0;
    public function __construct()
    {
       $this->number = 0; 
    }
    public function add($value)
    {
        $this->number += $value;
        return $this;
    }
    public function subtract($value)
    {
        $this->number -= $value;
        return $this;
    }
    public function multiply($value)
    {
        $this->number *= $value;
        return $this;
    }
    public function result()
    {
        return $this->number;
    }

}
$math = new Calculator();
echo $math->add(10)->subtract(5)->multiply(12)->result();
echo "\n";