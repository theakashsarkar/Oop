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
      protected function showClassName()
      {
         return __CLASS__;
      }
      public function showClass()
      {
         echo "Animal";
      }


   }
   class Mamal extends Animal
   {
     public $size; 
     public function __construct($hands = 0,$ears = 0,$legs = 0,$eye = 0,$size = 0)
     {
        parent::__construct($hands = 0,$ears = 0,$legs = 0,$eye = 0);
        $this->size = $size;
     }
     function showSize()
     {
       echo parent::showClassName()."\n";
        echo "size dosn't metter $this->size";
     }
     public function showClass()
     {
        echo "Mamal \n";
     }
     
   }
   class Human extends Mamal
   {
      
   }
   $dog = new Mamal(4,2,4,5,"big");
   echo $dog->showClass();
   $animal = new Animal;
   $animal->showClass();
