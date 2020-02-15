<?php
  spl_autoload_register(function($className){
    echo "I am looking form className:$className \n";
    if(file_exists("inc/".$className.".php")) 
      include "inc/".$className.".php";
    else
      throw new Exception("conld not found".$className); 
  });
  function myAutoload($className)
  {
      echo "I am looking for class Name: $className";
      if(file_exists("inc/".$className.".php"))
        include "inc/".$className.".php";
      else
        throw new Exception("could not found".$className);  
  }
   spl_autoload_register('myAutoLoad');
try{
  $dog = new ne;

  $dog->show()."\n";
  $dog = new ten;
}catch(Exception $e)
{
    echo $e->getMessage()."\n";
}