<?php

$teste = "asd";

echo "$teste global 1 <br>";

if(5 > 2){
    $teste = "dsa";
    echo "$teste if <br>";
}

echo "$teste global 2 <br>";


function funcao(){
    $teste = "xsx";
    echo "$teste func <br>";
} 

funcao();

echo "$teste global 3 <br>";

function testandoGlobal(){
    global $teste; //Acessa uma variavel global e toda a alteração feita na variavel dentro dessa função altera globalmente tbm
    echo "$teste funcGlobal <br>";
    $teste = "Julia";
    
}

testandoGlobal();

echo "$teste global 4 <br>";