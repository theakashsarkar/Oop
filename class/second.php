<?php

  class second{
      var $name = "akash";
      var $age = 834;

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
  };
  $third = new second;
  $third->name = "akash";
  $third->age  = 89;

  $third->showEverything();

 $akash = new second;
 echo $akash->name." is ".$akash->age." years old\n";
 $akash->showAge();
 $akash->name = "sujan sarkar";
 echo $akash->name." is ".$akash->age." years old\n";


 $techmaster = new second;
 $techmaster->name ="techmaster live";
 $techmaster->age = 34;

echo $techmaster->name." and ".$techmaster->age." old\n ";
echo $techmaster->showAge();

?>