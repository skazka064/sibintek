<?php
$text= "стеклянный оловянный деревянный стальной обычный солнечный солнечная сулугуни";
$pieces = explode(" ", $text);

for ($i=0; $i<count($pieces);$i++) {
    preg_match('/(ный$)|(ное$)|(ная$)/', $pieces[$i], $matches);

    $arr1[]=$matches;

}



echo "<pre>";
print_r($arr1);
?>