<?php


$x = 10;
echo "$x global<br>";

function teste(){
    $x = 5;
    echo "$x local 1 <br>";
}

teste();

echo "$x global<br>";

function testando(){
    $x = 19;
    echo "$x local 2<br>";
}

teste();

testando();

echo "$x global";