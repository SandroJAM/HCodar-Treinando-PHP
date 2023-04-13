<?php

$arr1 = ["Maçã", "Pera", "Mamão", "Melão", "Jaca"];

$str = implode(", ", $arr1);

echo "$str <br>";

$arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

$str2 = implode(" <->", $arr2);

echo "$str2 <br>";