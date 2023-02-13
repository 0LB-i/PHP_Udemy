<?php



function  evenOdd($number){
    if($number % 2 == 0){
        echo "O número $number é par.<br>";
    }else{
        echo "O número $number é ímpar.<br>";
    }
}

evenOdd(3);

evenOdd(4);
