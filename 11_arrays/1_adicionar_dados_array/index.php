<?php

  // Criando array vazio
  $arr = [];

  print_r($arr);
  echo "<br>";

  // Adicionando valors

  $arr[0] = 10;

  print_r($arr);
  echo "<br>";

  $arr[1] = 20;

  print_r($arr);
  echo "<br>";

  // Adicionando quebrando o índice

  $arr[6] = 500; // Quebra de índice pode ser feita, mas não é indicado

  print_r($arr);
  echo "<br>";

  // Alterando valores

  $arr[1]+= 40;

  print_r($arr);
  echo "<br>";

  // Array associativo

  echo "<br>";

  $arrAssoc = []; print_r($arrAssoc); echo "<br>";

  $arrAssoc["Carro"] = "ONIX JOY";

  print_r($arrAssoc);

  echo "<br>";

  $arrAssoc["Avião"] = "BOEING";

  print_r($arrAssoc);

  echo "<br>";

  $arrAssoc["Carro"] = "FERRARI";

  print_r($arrAssoc);