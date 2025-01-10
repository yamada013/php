<?php

$a = 0;
do {
    echo $a . '<br />';
    $a++;
} while ($a <= 10);

$a = 0;
while ($a <= 10) {
    if ($a == 6) {
        $a++;
        continue;
    }
    echo $a . '<br />';
    $a++;
}

$num = 0;
do {
    echo 'num=' . $num . '<br />';
    $num++;
} while ($num <= 2);
echo '<br />';

$Fizz = 'Fizz';
$Buzz = 'Buzz';
$FizzBuzz = 'FizzBuzz';

for ($i=1; $i <= 50; $i++) { 
    if ($i %15==0) {
        echo $FizzBuzz . '<br />';
    }elseif ($i %3 ==0) {
        echo $Fizz .'<br />';
    }elseif ($i %5 ==0) {
        echo $Buzz . '<br />';
    }else {
        echo $i . '<br />';
    }
}

for ($i=1; $i < 6 ; $i++) { 
    for ($j=1; $j < 6; $j++) { 
        echo '⚫︎';
    }
    echo '<br />';
}

for ($g=1; $g <= 5; $g++) { 
    for ($h=1; $h <=1 ; $h++) { 
        echo 'あ';
    }
    for ($j=1; $j <= 1 ; $j++) { 
        echo 'い';
    }
    for ($k=1; $k <= 1 ; $k++) { 
        echo 'う';
    }
    for ($l=1; $l <= 1 ; $l++) { 
        echo 'え';
    }
    for ($m=1; $m <=1 ; $m++) { 
        echo 'お';
    }
    echo '<br />';
}