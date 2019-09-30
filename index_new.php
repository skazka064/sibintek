<?php
ini_set('error_reporting', E_ALL);


 class Word
 {
     public $text;

     public function __construct($t)
     {
        $this->text = $t;
     }

     public function  isAdjective()
     {

         $pieces = explode(" ", $this->text);

         for ($i=0; $i<count($pieces);$i++) {
             preg_match('/.*(ный$)|.*(ное$)|.*(ная$)|.*(ной$).*(ний$)/', $pieces[$i], $matches);
             $arr1[]=$matches;
         }
         for ($i=0; $i<count($arr1);$i++){
             if (!isset($arr1[$i][0])){
                 $arr1[$i][0]=null;
             }
             $rez[]=$arr1[$i][0];
         }
         $rez= array_unique($rez);
         $new_arr = array_diff($rez, array(''));

         return $new_arr;
     }

 }

 $my_world = new Word('красный синий зеленый желтый великолепный');


echo"<pre>";
echo var_dump($my_world->isAdjective());

?>