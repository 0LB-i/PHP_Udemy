<?php

$a = 4;

$limite = 30;

$c = 24;

while($a <= $limite){

    echo $a . "<br>";

    if($a == $c){
        echo "Break";
        break;
    }
    
    $a = $a + 2;
    
}