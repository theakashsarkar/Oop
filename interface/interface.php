<?php

  interface PaymentInterface
  {
    public function capturePayment();
    public function confirmPayment();
    public function declinedPayment();
    public function refundPayment();
  }
 
  interface loger
  {
    public function preRequeste();
    public function postRequeste();
    public function log();
  }
  interface paymentLoger extends PaymentInterface,loger{

  }

  class Bkash implements paymentLoger{
    public function capturePayment(){

    }
    public function confirmPayment(){

    }
    public function declinedPayment(){

    }
    public function refundPayment(){

    }
    public function preRequeste(){

    }
    public function postRequeste(){

    }
    public function log(){

    }
  }


?>
