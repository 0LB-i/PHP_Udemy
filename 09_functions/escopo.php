<?php

$a = 10;
$b = 15;

function testeEscopo(){

    $a = 5;

    global $b;

    static $c = 0;

    $b++;
    $a++;
    $c++;

    echo "Escopo local de A: $a. <br>";

    echo "Escopo Global na função B: $b <br>";

    echo "Escopo local na função C: $c <br>";

}

echo "Escopo Global de B: $b. <br>";

testeEscopo();

echo "Escopo Global de A: $a. <br>";
echo "Escopo Global de B: $b. <br>";

testeEscopo();

testeEscopo();
