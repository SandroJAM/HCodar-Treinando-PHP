<?php

$arrPessoa = ['nome' => 'Sandro Muniz', 'cpf' => '111.222.333-44', 'idade' => 56, 'sexo' =>'Masculino'];

print_r($arrPessoa);

// Desafio
if($arrPessoa['idade'] >= 18) {
    echo "<br>";
    echo "<br>"; echo "Essa pessoa é maior de idade!";
}