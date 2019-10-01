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

         if(preg_match('/.*(ный$)|.*(ное$)|.*(ная$)|.*(ной$)|.*(вый$)|.*(ное$)|.*(лый$)/', $this->text)) return true;
         return false;
     }



 }

$text= "веселый довольный прекрасный стальной позитивный позитивный солнечный солнечная солнечное красивый";
$pieces = explode(" ", $text);
$rez[] =null;
foreach ($pieces as $pie){


    $obj= new Word($pie);

    if (($obj->isAdjactive()) && (!in_array($obj, $rez)))  $rez[] = $obj;
}


 echo"<pre>";
 echo var_dump($rez);

?>