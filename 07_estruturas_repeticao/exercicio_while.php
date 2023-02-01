<?php


$a = ["Gabriel", 20, 32.67, false, true, 39, "Poste", "Burro", 11.2, 10];

$b = count($a);
$y = 0;

while($y < $b){

    if(is_string($a[$y])){
        echo $a[$y] . "<br>";
    }

    $y++;
}

echo "Exercicio completo";