<?php

function maximumSpeed($speed){
    
    if(is_int($speed)){
    echo "O carro atinge a velocidade máxima de $speed km/h <br>";
    }else{
        echo "Por favor, passe um número inteiro <br>";
    }
}

maximumSpeed(250);
maximumSpeed(123);

$speed = 145;

maximumSpeed($speed);


//O PHP ignora o parâmetro extra
maximumSpeed(123, "Blusa");

maximumSpeed(5.23);

function describeAnimal($name, $race){

    echo "O nome do animal é $name, e ele é da raça $race.<br>";
}

describeAnimal("Rex", "Pastor Alemão");