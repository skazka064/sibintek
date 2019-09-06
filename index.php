<?php
$text= "стеклянный оловянный деревянный стальной обычный солнечный";
$pieces = explode(" ", $text);

for ($i=0; $i<count($pieces);$i++) {
    preg_match('/(.*)[ный]/', $pieces[$i], $matches);

    $arr1[]=$matches;

}

echo count($arr1);



echo "<pre>";
print_r($arr1);
?>