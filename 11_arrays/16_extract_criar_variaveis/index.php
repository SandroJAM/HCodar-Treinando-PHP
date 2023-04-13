<?php

  // Array Associativo

  $arr = [
    'cor' => 'Vermelho',
    'forma' => 'Retângular',
    'material' => 'Aço'
  ];

  extract($arr);

  echo "$cor <br>";
  echo "$forma <br>";
  echo "$material <br>";

  $nome = "Sandro Muniz";

  $pessoa = [
   'nome' => 'Enzo',
   'idade' => '6',
  ];

  echo "$nome <br>";

  extract($pessoa);

  echo "$nome <br>";
  echo "$idade <br>";