<?php

  $contador = 4;
  $limite = 30;

  while ($contador < $limite) {
    echo "Executando o loop $contador <br>";
    $contador += 2;   
  }

  echo "<br>";

  $contador = 4;
  $limite = 30;

  while ($contador < $limite) {
    echo "Executando o loop $contador <br>";
    $contador += 2;   
    if($contador == 22) {
        echo "<br>"; echo "STOP no LOOP! <br>";
        break;
    } 
  }