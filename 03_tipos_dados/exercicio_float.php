<?php

$a = 2.3;

echo 12.54;

echo "<br>";

echo $a;

echo "<br>";

echo $a - 1;

if(is_float($a)){
    echo "<br> É float: " . $a . "<br>";
}

if(is_float(12)){
    echo "É float: ";
}else{
    echo "Não é float";
}