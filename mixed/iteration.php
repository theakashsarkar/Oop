<?php
class User {
    public $name = "Akash";
    public $age  = "39";
    public $roll = '1';
    protected $number = "07828527818";
    protected $email = "theakashsarkar7@gmail.com";
    public static $course = 'PHP';
    public static $nextCourse = "JS";

    public function getProparti()
    {
        foreach($this as $key => $value)
        {
            echo $key . "=" . $value."\n";
        }
    }

}
$obj = new User();
$obj->getProparti();
$refClass = new ReflectionClass('User');
$staticList = $refClass->getStaticProperties();
foreach($staticList as $key => $value)
{
    echo $key . '=' . $value."\n";
}