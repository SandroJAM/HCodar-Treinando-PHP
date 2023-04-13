<?php

// RESGATAR ELEMENTOS DE ARRAY
// REMOVE ELEMENTOS

$arr1 = range(1, 6); // 1,2,3,4,5,6

$remove1 = array_splice($arr1, 1, 2); // 1,4,5,6

print_r($arr1);
echo "<br>";

print_r($remove1);
echo "<br>";

echo "<br>";

$arr2 = range(1, 6); // 1,2,3,4,5,6

$remove2 = array_splice($arr2, 3); // 4,5,6

print_r($arr2);
echo "<br>";

print_r($remove2);
echo "<br>";

echo "<br>";

$arr3 = range(1, 6); // 1,2,3,4,5,6

$remove3 = array_splice($arr3, 1, -1); // 1,6

print_r($arr3);
echo "<br>";

print_r($remove3);
echo "<br>";

