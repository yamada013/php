<?php
$a = 5;
$b = 10;

if($a == 5){
    echo "TRUE";
}
echo "<br />";

if($a == 5){
    echo "\$aは5です";
}
echo "<br />";

$a = 7;
if($a == 5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}
echo "<br />";

$a = 7;
if($a == 2){
    echo "\$aは2です";
}elseif($a == 7){
    echo "\$aは7です";
}else{
    echo "\$aは2と5以外です";
}
echo "<br />";

$people = "Saburo";
switch($people){
    case "Taro";
    echo "太郎です";
    case "Ziro";
    echo "次郎です";
    case "Saburo";
    echo "三郎です";
}
echo "<br />";

$people = "Yamada";
switch($people){
    case "Tanaka";
    echo "田中です";
    case "Yamashita";
    echo "山下です";
    case "Yamada";
    echo "山田です";
}
echo "<br />";

$a = 7;
$b = ($a == 5) ? "7です":"5です";
echo $b;
echo "<br />";