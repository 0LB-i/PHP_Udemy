<?php



$s = 23.12;

if(is_float($s)){
    echo "É float <br>";
}

if(is_float(25)){
    echo "É float <br>";
} else {
    echo "Não é Float <br>";
}

if(is_float("Gabriel")){
    echo "É float <br>";
} else {
    echo "Não é float";
}