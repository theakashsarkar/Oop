<?php
  class Animal 
  {
      protected $legs;
      private $heand;
      private $ears;
      private $eyes;

      public function __construct($legs,$heand,$ears,$eyes){
          $this->legs  = $legs;
          $this->heand = $heand;
          $this->ears  = $ears;
          $this->eyes  = $eyes;
          
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
        
        public function showClass()
        {
          echo "funtion hellow world";
        }
     
  }

  class Mamal extends Animal
  {
    private $size;

    public function __construct($legs = 0,$heand = 0,$ears =0,$eyes=0,$size=0)
    {
        parent:: __construct($legs,$heand,$ears,$eyes);
        $this->size = $size;
    }

    public function showSize()
    {
      echo "size is $this->size with $this->legs legs \n";
    }

    public function showClass()
    {
      echo "function hellow world";
    }

  }

  $dog = new Mamal(4,0,2,2,'big');
  echo $dog->showSize();
