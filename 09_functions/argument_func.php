<?php

    function soma($a, $b){

        print_r(func_get_args());

        echo "<br>";

        echo func_num_args() . "<br>";

    }


    soma(3,9);

    function subtracao($a, $b, $c, $d){

        print_r(func_get_args());

        echo "<br>";

        echo func_num_args() . "<br>";
        
    }


    subtracao(3,9,8,9);