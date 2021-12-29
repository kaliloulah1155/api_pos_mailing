<?php
class Ipconfig{
   public $ip ='';
   public function apiAdress(){
    $this->ip='http://127.0.0.1:8000/api/';   //api pilotant le push mail 
   	    return $this->ip;
   }
}