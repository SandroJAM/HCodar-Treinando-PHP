<?php

  // Posso fazer assim 1

  function forma1DePotencia($num1, $num2) {
    return $num1 ** $num2;
  }

  echo "Forma 1 - "; echo forma1DePotencia(2, 3);

  echo "<br>";

  // Posso fazer assim 2

  function forma2DePotencia($num1, $num2) {
    return $resultado = $num1 ** $num2;
  }

  echo "Forma 2 - "; echo forma2DePotencia(10, 3);

  echo "<br>";

  // Posso fazer assim 3

  $assim3 = forma2DePotencia(8, 2); echo "Forma 3 - $assim3" . "<br>";