<?php
class Ipconfig{
    public $ip ='';
   public function apiAdress(){

    $this->ip='http://ngservasgateway.com:4200/push/';
   	    return $this->ip;

   }
}