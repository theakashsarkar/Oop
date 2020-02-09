<?php
 
 class second{
    var $name = "akash";
    var $age = 834;
    function __construct($name,$age)
    {
      echo "i am constuctor\n ";
      $this->name=$name;
      $this->age=$age;
    }

    function showAge()
    {
       echo $this->age."\n";
    }
    function showName()
    {
      echo $this->name."\n";
    }
    function showEverything()
    {
        $this->showAge();
        $this->showName();
    }
    function __destruct()
    {
        echo "i am  destructing in the object";
    }
};
$obj = new second("akash",93);

$obj = null;