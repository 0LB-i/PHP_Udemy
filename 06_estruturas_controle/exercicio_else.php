<?php

$idade1 = 20;
$idade2 = 13;

$maioridade = 18;

$msg = "Você é mior de idade. <br>";
$msg2 = "Você é menor de idade. <br>";

if($idade1 >= $maioridade){
    echo $msg;
} else {
    echo $msg2;
}

if($idade2 >= $maioridade){
    echo $msg;
} else {
    echo $msg2;
}
