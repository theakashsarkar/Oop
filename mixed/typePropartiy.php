<?php
class User{
    public string $name;
    public string $userType;
    public int    $age;
    public ?string $email;
    public bool   $isAdmin;
    public self   $obj;
    
    public function __construct()
    {
        $this->name = 'Akash';
        $this->email = "theakashsarkar7@gmail.com";
    }
}
$one = new User;
var_dump($one->name);