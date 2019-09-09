<?php
$text= "стеклянный оловянный деревянный стальной обычный солнечный солнечная сулугуни солнечная солнечное";
$pieces = explode(" ", $text);

for ($i=0; $i<count($pieces);$i++) {
    preg_match('/.*(ный$)|.*(ное$)|.*(ная$)/', $pieces[$i], $matches);
    $arr1[]=$matches;

}

for ($i=0; $i<count($arr1);$i++){
    $rez[]=$arr1[$i][0];
}

$rez= array_unique($rez);

echo "<pre>";
print_r($rez);
?>