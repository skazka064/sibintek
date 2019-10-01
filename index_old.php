<?php
ini_set('error_reporting', E_ALL);
$text= "стеклянный оловянный деревянный стальной обычный солнечный солнечная сулугуни солнечная солнечное";
$pieces = explode(" ", $text);

for ($i=0; $i<count($pieces);$i++) {
    preg_match('/.*(ный$)|.*(ное$)|.*(ная$)|.*(ной$)/', $pieces[$i], $matches);
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
echo "<pre>";
print_r($new_arr);
?>