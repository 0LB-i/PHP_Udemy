<?php

$array = [];


for ($i=0; $i < 30 ; $i++) { 
    
    array_push($array, $i);

}

print_r($array);

echo "<br>";


function maior7($array){

    $arrayRetorno = [];

    for($a =0; $a < count($array); $a++){
        if($array[$a] > 7){

            array_push($arrayRetorno, $array[$a]);

        }
    }

    return $arrayRetorno;

} 


$novoArray =  maior7($array);

print_r($novoArray);
