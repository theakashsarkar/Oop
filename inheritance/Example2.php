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
        public function getLegs(){
             return $this->legs."\n";
        }
        public function setLegs($legs){
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
    public function __constructor($legs,$heand,$ears,$eyes)
    {
        parent::__constructor($legs,$heand,$ears,$eyes);
    }
  }
  $dog = new Mamal(4,0,2,2);
  echo $dog->getHeand();
