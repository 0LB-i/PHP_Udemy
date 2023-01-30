<?php


$a = 20;
$b = "Gabriel";
$c = true;

if(is_int($a)){
    echo "Essa variavel é um inteiro.<br>";
} else {
    echo "Essa variável não é um inteiro.<br>";
}

if(is_int($b)){
    echo "Essa variavel é um inteiro.<br>";
} else {
    echo "Essa variável não é um inteiro.<br>";
}

if(is_int($c)){
    echo "Essa variavel é um inteiro.<br>";
} else {
    echo "Essa variável não é um inteiro.<br>";
}

echo "Comparação de Peso <br>";

$peso = 30;
$peso2 = 120;

$pesoLimite = 80;

if($peso <= $pesoLimite){
    echo "Peso dentro do limite. <br>";
} else {
    echo "Você está muito pesado :). <br>";
}


if($peso2 <= $pesoLimite){
    echo "Peso dentro do limite. <br>";
} else {
    echo "Você está muito pesado :). <br>";
}