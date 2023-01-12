<?php

$x = 4;
            //  =& referencia variaveis
$y =& $x; //Referência no mesmo lugar na memória o valor, logo se y mudar o valor, x tbm muda, e vice versa. isso tbm ocorre em Strings.

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 20;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = -10;

echo $x;
echo "<br>";
echo $y;