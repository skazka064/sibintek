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

$text= "стеклянный оловянный деревянный стальной обычный солнечный солнечная сулугуни солнечная солнечное красивый";
$pieces = explode(" ", $text);
$rez[] =null;
foreach ($pieces as $pie){


    $obj= new Word($pie);

    if (($obj->isAdjactive()) && (!in_array($obj, $rez)))  $rez[] = $obj;
}


 echo"<pre>";
 echo var_dump($rez);

?>