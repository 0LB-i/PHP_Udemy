<?php


$pessoa = [
    'Nome' => 'Gabriel',
    'Idade' => 12,
    'Sexo' => 'Masculino'
];

$nome = $pessoa['Nome'];
$idade = $pessoa['Idade'];
$sexo = $pessoa['Sexo'];

if ($idade >= 18) {
    echo "$nome é do sexo $sexo, e é maior de idade: $idade";
} else {
    echo "$nome é do sexo $sexo, e é menor de idade: $idade";
}