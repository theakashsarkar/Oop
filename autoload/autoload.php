<?php
   
   spl_autoload_register (function($className)
   {
       echo "I am looking for className:$className \n";
       if(file_exists("inc/".$className.".php"))
          include "inc/".$className.".php";
       else
          throw new Exception("could not found"." ".$className);   

   });
   function myAutoloaderFuntion($className)
   {
    echo "I am looking for className:$className \n";
        if(file_exists("inc/".$className.".php"))
            include "inc/lib".$className.".php";
        else
            throw new Exception("could not found"." ".$className);  
   }

   function myAutoloaderFuntionAlt($className)
   {
    echo "I am looking for className:$className \n";
        if(file_exists("inc/".$className.".php"))
            include "inc/lib".$className.".php";
        else
            throw new Exception("could not found"." ".$className);  
   }

   spl_autoload_register('myAutoloaderFuntion');
   spl_autoload_register('myAutoloaderFuntionAlt');

try{
    // include "inc/One.php";
 $obj = new One();
//  $obj->show();
 $obj1 = new Two;
 $obj2 = new ten;
}catch(Exception $e)
{
    echo $e->getMessage()."\n";
}