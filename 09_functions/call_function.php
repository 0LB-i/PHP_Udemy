<?php

//Definindo função
    function soma(){

        $a = 4;
        $b = 9;

        echo $a + $b . "<br>";
    }


//Chamando função

soma();

// Função do php que transforma as letras em maiusculas, não funciona com caracteres especiais
// como Ç ou Ã

echo strtoupper("testando função<br>");