<?php
abstract class DummyAbstract {
     abstract function showName();
    function showAnotherName()
    {

    }
    function showAnotherNameAndAddress(){

    }
 }
 abstract class two extends DummyAbstract
 {
     function showAddress(){
         
     }
 }