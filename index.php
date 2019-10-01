<?php
ini_set('error_reporting', E_ALL);


 class Word
 {
     public $text;


     public function __construct($param)
     {
         $this->text = $param;

     }

     public function isAdjactive(){

         if(preg_match('/.*(ный$)|.*(ное$)|.*(ная$)|.*(ной$)/', $this->text)) return true;
         return false;
     }



 }



$obj= new Word("красивый");
$obj->isAdjactive();

 echo"<pre>";
 echo var_dump($obj);

?>