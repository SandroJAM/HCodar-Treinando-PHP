<?php

  $frase1 = "Testando explode";

  $fraseArray1 = explode(" ", $frase1);

  print_r($fraseArray1); echo "<br>";

  echo "<br>";

  $fraseArray2 = explode(",", $frase1); // Criou um elemento só pois não encontrou um delimitador

  print_r($fraseArray2); echo "<br>";  // O delimitador precisa existir na String

  $frase2 = "Avião, Barco, Carro, Navio";

  $fraseArray3 = explode(",", $frase2);

  echo "<br>";

  print_r($fraseArray3); echo "<br>";

  echo "<br>";

  for($i = 0; $i < count($fraseArray3); $i++) {
    echo "$fraseArray3[$i] <br>";
  }