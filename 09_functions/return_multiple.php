<?php

    function alteraDados($name, $age){

        $name = "Sr. $name";
        $age = "$age anos";

        return [$name, $age];
    }

$dados = alteraDados("Gabriel", 20);

print_r($dados);

echo "<br>";

echo "Olá $dados[0], você têm $dados[1]";
