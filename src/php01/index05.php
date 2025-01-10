<?php
for ($i = 0; $i < 4; $i++) {
  echo $i;
}
echo "<br />";

$name1 = "Sato" . "Taro";
echo $name1;
echo "<br />";

for ($a = 1; $a <= 5; $a++) {
  echo $a * 2 ."<br />";
}

for ($b=1; $b<=10 ; $b++) {
  echo $b + 2 ."<br />";
}
echo "<br />";

if ($name1=="Sato" . "Taro") {
  echo "\$name1は佐藤です";
}
echo "<br />";

if ($name1=="Tanaka") {
  echo "\$name1は田中です";
}else {
  echo "\$name1は佐藤です";
}
echo "<br />";

if ($name1=="Yamada") {
  echo "\$name1は山田怜美です";
}elseif ($name1=="Yamashita" . "Takurou") {
  echo "\$name1は山下拓郎です";
}else {
  echo "\$name1は佐藤太郎くんです";
}echo "<br />";

switch ($name1) {
  case $name1=="Sato" . "Taro":
    echo "\$name1は佐藤太郎さんです";
    break;
  case $name1=="Yokoi" . "Ziro":
    echo "\$name1は横井次郎さんです";
    break;
}
echo "<br />";

$a=7;
$b=10;
$c=2;

$d=($a>$b) ? "TRUE" : "FALSE";
echo $d;
echo "<br />";
$e=($b<$c) ? "TRUE" : "FALSE";
echo $e;
echo "<br />";
$f=($a<$c) ? "Tanaka" : "Yamada";
echo $f;
echo "<br />";

while ($a <= 10) {
    ++$a;
    if ($a == 9) {
        break;
    }
    echo $a;
}
echo "<br />";