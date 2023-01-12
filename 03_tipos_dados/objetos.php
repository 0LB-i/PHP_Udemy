<?php

class Pessoa{
    function falar(){
        echo "Olá Pessoal";
    }
}

$gabriel = new Pessoa();

$gabriel -> nome = "Gabriel";

echo $gabriel->nome;

echo "<br>";

$gabriel->falar();