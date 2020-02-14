<?php

   class Animal
   {

     private $hands;
     private $ears;
     private $legs;
     private $eye;
      public function __construct($hands = 0,$ears = 0,$legs = 0,$eye = 0)
      {
        $this->hands = $hands;
        $this->ears  = $ears;
        $this->legs  = $legs;
        $this->eye   = $eye;

        
       

      }
      public function getHands()
        {
            return $this->hands;
        }
     public function setHands($hands)
        {
           echo $this->hands = $hands;
        }


   }
   class Mamal extends Animal
   {
    
   }
   $dog = new Mamal(4,2,4,5);
   echo $dog->getHands();
