<?php
  
  $a = 10;

  while($a > 0) {

    if($a == 5 || $a == 7) {
        echo "Pulou a execução $a <br>";
        $a--;
        continue;
     }

    if($a == 2) {
      echo "Finalizando o LOOP com BREAK! $a <br>";
      break;
    }
    // continue e break
    echo "Executando do LOOP $a <br>";
    $a--;

  }