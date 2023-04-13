<?php

$arr1 = [
    'Sandro' => 56,
    'Isis' => 76,
    'Junior' => 53,
    'Enzo' => 6,
    'Ane' => 50,
    'Barbara' => 47,
];

asort($arr1); // Ordenação crescente

print_r($arr1);
echo "<br>";

$arr2 = [
    'Sandro' => 56,
    'Isis' => 76,
    'Junior' => 53,
    'Enzo' => 6,
    'Ane' => 50,
    'Barbara' => 47,
];

arsort($arr2); // Ordenação decrescente

print_r($arr2);
echo "<br>";

ksort($arr2); // Ordenação crescente por chaves

print_r($arr2);
echo "<br>";

krsort($arr2); // Ordenação decrescente por chave

print_r($arr2);
echo "<br>";