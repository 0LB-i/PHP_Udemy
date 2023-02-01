<?php

$a = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$b = count($a);

$c = 0;

while ($c < $b){
    if($a[$c] == 30 || $a[$c] == 40){
        $c++;
        continue;
    }

    echo "Loop normal $a[$c]<br>";

    $c++;
}