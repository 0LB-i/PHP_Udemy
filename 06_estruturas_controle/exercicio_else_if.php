<?php


$velocidade1 = 30;
$velocidade2 = 40;
$velocidade3 = 50;

$velocidadeMaxima = 40;

if($velocidade1 < $velocidadeMaxima){
    echo "Você está dentro do limete de velocidade, continue assim.<br>";
} else if ($velocidade1 == $velocidadeMaxima){
    echo "Você está quase ultrapasando o limete de velocidade, cuidado.<br>";
} else if ($velocidade1 > $velocidadeMaxima){
    echo "Você foi multado por estar acima do limete de velocidade permitido.<br>";
}

if($velocidade2 < $velocidadeMaxima){
    echo "Você está dentro do limete de velocidade, continue assim.<br>";
} else if ($velocidade2 == $velocidadeMaxima){
    echo "Você está quase ultrapasando o limete de velocidade, cuidado.<br>";
} else if ($velocidade2 > $velocidadeMaxima){
    echo "Você foi multado por estar acima do limete de velocidade permitido.<br>";
}

if($velocidade3 < $velocidadeMaxima){
    echo "Você está dentro do limete de velocidade, continue assim.<br>";
} else if ($velocidade3 == $velocidadeMaxima){
    echo "Você está quase ultrapasando o limete de velocidade, cuidado.<br>";
} else if ($velocidade3 > $velocidadeMaxima){
    echo "Você foi multado por estar acima do limete de velocidade permitido.<br>";
}