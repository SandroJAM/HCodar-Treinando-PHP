<?php

  $arr =[10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

  $inc = 0;

  while($inc < count($arr)) {

    $numeroAtual = $arr[$inc];

    if($numeroAtual == 30 || $numeroAtual == 40) {
        $inc++;
        continue;
    }

    echo "Elemento: $numeroAtual <br>";

    $inc++;
  }