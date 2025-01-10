<?php
function outputNumber($a){
    echo '引数の値は' . $a . 'です' . '<br />';
}
outputNumber(7);


function text($number1,$number2){
    $value = $number1 + $number2;
    return $number1;
}
$total = text(8,20);
echo $total . '<br />';

function number($b,$c,$d){
    $e = $b + $c + $d;
    return $b;
}
$f = number(80,20,30);
echo $f . '<br />';

function score($score1,$score2,$score3){
    $total = $score1 + $score2 + $score3;
    if ($total>210) {
        echo '合計点は' . $total . 'なので合格です';
    }else {
        echo '合計点は' . $total . 'なので不合格です';
    }
}
$result = score(80,90,50);

for ($i=1; $i < 10 ; $i++) { 
    echo $i *2 . '<br />';
}

$a=0;
while ($a <= 10) {
    if ($a==3) {
        break;
    }
    echo $a . 'は3回までです' . '<br />';
    $a++;
}

$people = [
    [
        'person' => 'Taro',
        'age' => 25,
        'gender' => 'men'
    ],
    [
        'person' => 'Jiro',
        'age' => 29,
        'gender' => 'men'
    ],
    [
        'person' => 'hanako',
        'age' => 16,
        'gender' => 'women'
    ],
];
echo $people[0]['person'] . '(' . $people[0]['age'] . '歳' . $people[0]['gender'] . ')';
echo '<br />';
echo $people[1]['person'] . '(' . $people[1]['age'] . '歳' . $people[1]['gender'] . ')';
echo '<br />';
echo $people[2]['person'] . '(' . $people[2]['age'] . '歳' . $people[2]['gender'] . ')';
echo '<br />';

$people1 = [
    ['Yamada',25,'men'],
    ['Tanaka',20,'men'],
    ['Yamamoto',16,'women']
];
foreach ($people1 as $person1) {
    echo $person1[0] . '(' . $person1[1] . '歳' . $person1[2] . ')';
}