<?php
   
   spl_autoload_register (function($className)
   {
       echo "INC:: I am looking for className:$className \n";
       if(file_exists("inc/".$className.".php"))
          include "inc/".$className.".php";   

   });
   function myAutoloaderFuntion($className)
   {
    echo "INC::LIB I am looking for className:$className \n";
        if(file_exists("inc/lib".$className.".php"))
            include "inc/lib".$className.".php";
    
   }

   function myAutoloaderFuntionAlt($className)
   {
    echo "LIB::I am looking for className:$className \n";
        if(file_exists("lib/".$className.".php"))
            include "lib/".$className.".php";
 
   }

   spl_autoload_register('myAutoloaderFuntion');
   spl_autoload_register('myAutoloaderFuntionAlt',false,true);

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