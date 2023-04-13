<?php

  // Definição do contador
  $x = 0;

  // Definição da estrutura
  while($x < 10) {
    // Corpo da estrurura
    echo $x . "<br>";
    // Incremento do contador
    $x++; // $x = $x + 1;
  }

    echo "<br>";

  // Sequencia do código
  echo "Continuando sequência do código <br>";

  echo "<br>";
  
  $y = 0;

  while($y <= 10) {

    echo $y . "<br>";

    $y = $y + 2;
  }

  echo "<br>"; echo "Continuando sequência do código <br>";

  echo "<br>";
  
  $z = 10;

  while($z > 0) {

    echo $z . "<br>";

    // Decrementando o contador
    $z--;
  }

  echo "<br>"; echo "Continuando sequência do código <br>";

    echo "<br>";
  
  $w = 10;

  while($w > 0) {
    if($w % 2 != 0) {
    echo $w . "<br>";
    }
    // Decrementando o contador
    $w--;
  }