<?php

  $sandro = [
    'nome' => 'Sandro Muniz',
    'idade' => 56,
    'profissao' => 'Analista de Sistemas'
  ];

  $barbara = [
    'nome' => 'Barbara Vasconcelos',
    'idade' => 47,
    'profissao' => 'Operadora de Caixa'
  ];

  foreach($sandro as $carac =>$value) { // Nome da Chave e Valor
    echo "$carac => $value <br>";
  }

  echo "<br>";

  foreach($barbara as $carac =>$value) { // Nome da Chave e Valor
    echo "$carac => $value <br>";
  }

  echo "<br>";

  foreach($barbara as $value) { // Só Valor
    echo "$value <br>";
  }