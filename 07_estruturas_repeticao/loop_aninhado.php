<?php


$a = 0;


while($a < 10){
    echo "<br> Loop Externo $a <br>";

    $b = 0;

    while($b < 10){
        echo "Loop interno $b <br>";

        $b++;
    }

    $a++;

}