<?php
  class Animal{
      protected $legs;
      private $heand;
      private $ears;
      private $eyes;

      public function __constructor($legs,$heand,$ears,$eyes){
          $this->legs = $legs;
          $this->heand = $heand;
          $this->ears = $ears;
          $this->eyes = $eyes;
          
        }  
        public function getLags(){
              return $this->legs."\n";
        }
        public function setLags($legs){
              $this->legs = $legs."\n";
        }
        public function getHeand(){
            return $this->heand;
        }
        public function setHeand(){
            $this->heand = $heand;
        }
     
  }

  class Mamal extends Animal
  {
    public function showChildLegs(){
        echo $this->legs;
    }
  }
  $dog = new Mamal;
  $dog->setLags(2);
  $dog->showChildLegs();
//   echo $dog->getLags();
//   var_dump($dog);