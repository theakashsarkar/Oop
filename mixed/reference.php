<?php
class User 
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }
}
$mizan = new User('Mizan', 39);
$copyMizan = &$mizan;
var_dump($mizan, $copyMizan);
$mizan = null;
var_dump($mizan, $copyMizan);