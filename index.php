<?php
$text= "стеклянный оловянный деревянный стальной обычный солнечный";
$pieces = explode(" ", $text);
echo count($pieces);
for ($i=0; $i<count($pieces);$i++) {
    preg_match('/(.*)/', $pieces[$i], $matches);
$arr[$i] = $matches[$i];

}

echo "<pre>";
print_r($arr);
?>