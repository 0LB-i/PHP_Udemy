<?php

header("content-type: text/plain"); //isso é necessário pq sem ele, o \n não pula linha, pq html não o encherga como uma variavel que pula linha igual o <br>, mas o sistema php entende, então por isso se torna necessa´rio esse header que basicamente faz com que o navegador execute texto puro;

//   \n = nova linha;

echo "Isso fica na primeira linha \n e isso na segunda linha \n";

//   \t = tab;

echo "Testando o tab \t aqui \n";

//    \\ = barra invertida

echo "Barra invertida \\ \n";

//     \$ = sifrão

echo "Sifrão \$ ";