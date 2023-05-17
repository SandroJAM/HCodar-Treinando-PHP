<?php

  $a = 5; $b = 2;
  $s = $a / $b;

  echo $a / $b;
  echo "<br>";
  
  if(is_float($a / $b)) {
    echo "É float <br>";
  }

  echo 2 . 3;
  echo "<br>";

  if(is_string(2 . 3)) {
    echo "É string <br>";
  }


  $nome = "Sandro";
  $sobrenome = "Muniz";
  
  $nomeCompleto = $nome . " " . $sobrenome;

  echo $nomeCompleto;
  echo "<br>";