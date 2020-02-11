<?php
  class Animal{
      private $legs;
      private $heand;
      protected $ears;
      public $eyes;

      public function __constructor($legs,$heand,$ears,$eyes){
          $this->legs = $legs;
          $this->heand = $heand;
          $this->ears = $ears;
          $this->eyes = $eyes;
          
        }  
         public function getLags(){
              return $this->legs;
          }
          public function setLags($legs){
              $this->legs = $legs."\n";
          }
     
  }
  $chicken = new Animal();
  $chicken->setLags(2);
  echo $chicken->getLags();
  //var_dump($chicken)

?>