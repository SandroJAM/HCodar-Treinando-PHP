<?php

  $arr = [
    "Batata",
    "Maçã",
    "Pera",
    "Feijão",
    "Arroz"
  ];

  print_r($arr);
  echo "<br>";

  $remove = array_splice($arr, 2, 2); // Remover Feijão

  echo "<br>";

  print_r($arr);
  echo "<br>";

  echo "<br>";

  print_r($remove);
  echo "<br>";