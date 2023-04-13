<?php

  // Função sem retorno
  function soma($num1, $num2) {
    echo $num1 + $num2;
  }

  soma(4, 4);

  echo "<br>";

  // Função com retorno
  function processaRetorna($num1, $num2) {
   return $num1 + $num2;
  }

  echo processaRetorna(5, 5);

  // Retornando para váriavel

  echo "<br>";

  $x = processaRetorna(6, 8);

  echo $x . "<br>";

  echo "<br>";

  $y = processaRetorna($x, 16);

  echo $y . "<br>";

  function testeRetorno() {
    return "Testando";
  }

  $z = testeRetorno();
  echo $z;