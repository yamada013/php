<?php
function score($score1 , $score2 , $score3){
    $total = $score1 + $score2 + $score3;
    return $total;
}
$add = score(60,70,90);
if ($add >= 210) {
    echo '合計点は' . $add . 'なので合格です' . '<br />';
}else {
    echo '合計点は' . $add . 'なので不合格てす' . '<br />';
}

function square($base , $height){
    return $base * $height;
}
function triangle($base , $height){
    return $base * $height /2;
}
function trapezoid($upperbase , $lowerbase , $height){
    return ($upperbase + $lowerbase) * $height /2;
}
echo square(4,7) . '<br />';
echo triangle(6,8) . '<br />';
echo trapezoid(5,6,12) . '<br />';

function exam($result , $result1 , $result2){
    $best = $result + $result1 + $result2;
    if ($best > 300) {
        echo '最高記録が' . $best . '点のため合格です';
    }else {
        echo '最高記録が' . $best . '点のため不合格です';
    }
}
$best = exam(90,120,95);

function speed($meter1 , $meter2 , $meter3){
    return $meter1 * $meter2 * $meter3;
}
function speed1($time , $time1 , $time2){
    return $time * $time1 * $time2;
}
echo speed(20 , 70 , 120) . '<br />';
echo speed1(2 , 4 , 3) . '<br />';

$sport = array(
    'sports1' => 'baseball',
    'sports2' => 'soccer',
    'sports3' => 'swimming'
);
foreach ($sport as $sports => $competition) {
    echo $sports . 'は' . $competition . 'です' . '<br />';
}

$people = [
    ['Taro' , 25 , 'men'],
    ['Jiro' , 20 , 'men'],
    ['hanako' , 16 , 'women']
];
foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}