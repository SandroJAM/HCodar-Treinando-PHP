<?php

$arr1 = [];

$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $i = 1;

// Criando um array dinâmico por meio de um push!

for($i = 1; $i <= 10; $i++) { 
  array_push($arr1, $i);
}

print_r($arr1);