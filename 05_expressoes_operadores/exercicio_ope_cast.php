<?php


$a = (int) "testando"; //vai para zero
$b = (int) 12.9; // cortou a casa e fica 12
$c = (int) [5,2,3]; // como é um array e só da o valor de 1

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";