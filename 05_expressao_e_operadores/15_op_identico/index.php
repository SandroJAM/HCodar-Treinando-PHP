<?php

  if(5 == "5") {
    echo "5 é igual a 5  1<br>";
  }

// op de idêntico
  if(5 === "5") {
    echo "5 é igual a 5  2<br>";
  }

  echo "<br>";

  if(5 === 5) {
    echo "5 é 5  3<br>";
  }

  if(5 === "teste") {
    echo "Não vai imprimir nada!  4<br>";
  }

  echo "<br>";

  $a = 4;
  $b = 4;
  $c = "4";

  if($a === $b) {
    echo "A é igual B $b <br>";
  }

  if($a === $c) {
    echo "A é igual C $b <br>";
  }

?>