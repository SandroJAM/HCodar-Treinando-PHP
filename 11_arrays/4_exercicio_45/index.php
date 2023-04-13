<?php

  $array1 = range(10, 45);

  // print_r($array1);

  for($i = 0; $i < count($array1); $i++) {

    $soma = $array1[$i] + 6;

    if($soma > 30) {
        echo "O número $soma é muito alto <br>";
    } else {
        echo "$soma <br>";
    }
  }