<?php

    function teste($a = "teste"){ //isso é um parametro default, assim seu software nunca da erro por falta de algum parâmetro

        echo "O valor de A é: $a. <br>";

    }

    teste();

    teste("Gabriel");


    function testando($b, $a = "x"){ //O ideal é deixar os padrões default por ultimo, para que aqueles parâmetro que precisam ser puchados de algum lugar, não se misturem com o default, tirando o beneficio de se ter um parâmetro default

        echo "O valor de A é: $a e de B é: $b. <br>";

    }

    testando("2");
    testando("7", "Gabriel");