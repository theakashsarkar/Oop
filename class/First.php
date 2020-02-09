<?php
  class First{
      var $name;
      var $age;

      function showAge()
      {
          echo "show age";
      }
  };
 $simpleObj1 = new First;
 var_dump($simpleObj1);
 $simpleObj = new First;
 var_dump($simpleObj);

?>