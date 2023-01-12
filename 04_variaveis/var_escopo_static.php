<?php

function teste(){

    $a = 0;
    $a++;
    echo "$a <br>";
}

teste();
teste(); //Uma variavel dentro de uma função não persiste fora dela
teste(); // Por isso toda vez que a func é chamada, ela começa em 0

function testeStatic(){
    static $a = 0; // com static o valor atribuido na func é mantido, ou seja, ela salva o novo valor, diferente do padrão que sempre reseta toda nova execução da func;
    $a++;

    echo "$a <br>";
}

testeStatic();
testeStatic();
testeStatic();