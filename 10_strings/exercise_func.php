<?php


$arr = [
    'porta' => 100,
    'maçaneta' => 5,
    'motor' => 2000,
    'retrovisor' => 20
];

function itensCarros($arr){

    $arrItensCarros = [];

        foreach($arr as $item => $preco){

            if($preco > 50){
                array_push($arrItensCarros, $item);
            }
        }
    

    return $arrItensCarros;

}

$novoArr = itensCarros($arr);

print_r($novoArr);