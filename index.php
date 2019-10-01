<?php
ini_set('error_reporting', E_ALL);


 class Word
 {
     public $text;
     public $pieces;

     public function __construct($param)
     {
         $this->text = $param;

     }

     public function pie(){
         $pieces = explode(" ", $this->text);
         return $pieces;
     }




 }



?>