<?php

  $dataA = new DateTime();
  $dataB = new DateTime();

  $dataC = new DateTime();

  $dataB->setDate(2022, 02, 27);
  $dataB->setTime(01, 10, 10);

  print_r($dataA); echo "<br>";
  print_r($dataB); echo "<br>";
  print_r($dataC); echo "<br>";

  echo "<br>";

  if($dataB > $dataA) { // Maior ou menor que
    echo "A data é B maior do que a data A <br>";
  } else { // <
    echo "A data A é maior do que a data B <br>";
  }

  echo "<br>";

  if($dataA < $dataB) { // Menor que
    echo "A data é A maior do que a data B <br>";
  }

  echo "<br>";

  if($dataA == $dataC) { // Não consegue comparar as datas com essa pequena execução de código
    echo "As data A e C são exatamente iguais!";
  }

  $dataC->setDate(2022, 02, 27);
  $dataC->setTime(01, 10, 10);

  echo "<br>";

  if($dataB == $dataC) { // Consegue comparar as datas com essa pequena execução de código
    echo "As data A e C são exatamente iguais!";
  }