<?php

$produtos = ["Maça", "Orange", "Watermelow", "Pera", "Coco", "Banana"];

function separacao($produtos){

    $str = "Você comprou essas frutas na fruteira: ";

    for($i = 0; $i < count($produtos); $i++){

        // .= Operador de concatenação e atribuição

        if($i + 1 == count($produtos)){
            $str .= "$produtos[$i]. ";
        }else{
            $str .= "$produtos[$i], ";
        }

    }

    return $str;
}

echo separacao($produtos);