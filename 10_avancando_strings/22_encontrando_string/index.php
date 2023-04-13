<?php

$frase = "Estamos testando o método strpos, com o strpos podemos encontrar strings";
$testeEncontrar = strpos($frase, "strpos");
echo "$testeEncontrar <br>";

$testeEncontrar2 = strpos($frase, "java");

echo "$testeEncontrar2 <br>";

if($testeEncontrar2 === false) {

    echo "Palavra não encontrada! <br>";

 }

$palavra1 = "com";

$testeEncontrar3 = strpos($frase, $palavra1);

echo "$testeEncontrar3 <br>";

$palavra2 = "to";

$testeEncontrar4 = strpos($frase, $palavra2);

echo "$testeEncontrar4 <br>";