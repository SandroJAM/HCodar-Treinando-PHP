<?php

  // Loop aninhado dentro de Loop

  $contador1 = 1; // Contador = 1
  $teste = "VARIÁVEL TESTE!";

  while($contador1 <= 10) {

    echo "Loop externo $contador1 <br>"; echo "<br>"; //echo "Loop externo " . $contador1 . "<br>";
    
    $contador2 = 1; // Contador = 2
    echo "$teste <br>";

    while($contador2 <= 5) {
        echo "Loop interno $contador2 <br>";
        echo "$teste <br>";
        $contador2++;
    }

    $contador1++;

    echo "<br>";

  }