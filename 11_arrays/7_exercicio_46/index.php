<?php

  $arr_mul_dim = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
  ];

  print_r($arr_mul_dim);
  echo "<br>";
  
  echo "<br>";

  // Loop no array externo
  for($i = 0; $i < count($arr_mul_dim); $i++) {

    // Imprimindo array
    echo "Imprimindo array externo: " . ($i + 1) . "<br>";

    // Imprimindo o array interno
    for($j = 0; $j < count($arr_mul_dim[$i]); $j++) {
      echo $arr_mul_dim[$i][$j] . "<br>";
    }

  }