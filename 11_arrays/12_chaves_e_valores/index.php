<?php

  // Chaves e Valores

  // Funções arrays_keys e array_values

  // Criando array Associativo

  $carro = [
    'Marca' => 'ONIX',
    'Motor' => '1.0',
    'Opcional' => 'Teto Solar',
    'Cambio' => 'Manual',
    'Marcha' => 6,
  ];

 // Transformar de forma rápida um Array Associativo em Array de índices

  $chaves = array_keys($carro);

  print_r($chaves);
  echo "<br>";

  echo "<br>";

  $valores = array_values($carro);

  print_r($valores);
  echo "<br>";