<?php

$people = array('Taro' , 'Jiro' , 'Saburo');
var_dump($people);
echo $people[0];

$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
var_dump($people);

$people = [
    'person1' => 'Taro',
    'person2' => 'Jiro',
];
echo $people['person1'];

$people = array('Taro','Jiro','Saburo');

foreach ($people as $person) {
    echo $person . '<br />';
}


$people = [
    'person1' => 'taro',
    'person2' => 'jiro',
    'person3' => 'saburo'
];

foreach ($people as $person => $name) {
    echo $person . 'は' . $name . 'です' . '<br />';
}

$people = [
    [
        'name' => 'Taro',
        'age' => 25,
        'gender' => 'men'
    ],
    [
        'name' => 'Jiro',
        'age' => 20,
        'gender' => 'men'
    ],
    [
        'name' =>'Hanako',
        'age' => 16,
        'gender' => 'women'
    ]
];
foreach ($people as $person => $info) {
    echo $person[0] . 'は' . $info . 'です' .'<br />';
}