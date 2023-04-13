<?php

  // Alterando case de palavras

  $frase1 = "testando o case de uma palavra <br>";
  $frase2 = "Testando o case de uma palavra <br>";
  $frase3 = "testando o case de uma palavra <br>";

  // Primeira letra em maiúsculo
  echo ucfirst($frase1);
  echo ucfirst($frase2);

  // Todas as palavras com as inicias maiúscula
  echo ucwords($frase3);
  echo ucwords($frase2);

  // Não são utilizadas