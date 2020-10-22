<?php
class User {
    public static function getName()
    {
        return __CLASS__;
    }
    public static function showName()
    {
        echo static::getName();
    }
}
class Student extends User{
    public static function getName()
    {
        return __CLASS__;
    }
}
User::showName();
Student::showName();