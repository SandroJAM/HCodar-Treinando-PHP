<?php

$texto = "Sandro Muniz";
$numero = 56;

if(is_string($texto)) {
    echo "$texto é uma string 1<br>";
}

if(is_string($numero)) {
    echo "$texto é uma string 2<br>";
}

if(is_string("sjam")) {
    echo "$texto é uma string 3<br>";
}