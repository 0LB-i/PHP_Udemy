<?php

$a = 0;

while($a < 10){
    echo $a . "<br>";

    $a = $a + 1;
}

echo "Continuando o Código <br>";

$b = 0;

while($b <= 10){
    echo $b . "<br>";

    $b = $b + 2;
}

echo "Continuando o Código <br>";

$c = 20;

while($c > 0){
    if($c % 2 != 0){
        echo $c . "<br>";
    }

    $c--;
}