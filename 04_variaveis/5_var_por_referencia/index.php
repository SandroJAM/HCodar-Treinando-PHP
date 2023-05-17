<?php

  $x = 10;
  $y =& $x;

  echo $x;
  echo "<br>";
  echo $y;

  $y = 15;

  echo "<br>";
  echo "Atribuição após a referência 1";
  echo "<br>";
  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $x = 20;

  echo "<br>";
  echo "Atribuição após a referência 2";
  echo "<br>";
  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $nome  = "Sandro";

  $nome2 =& $nome;
  
  echo $nome;
  echo "<br>";
  echo $nome2;
  echo "<br>";

  $nome2 = "Muniz";
  
  echo $nome;
  echo "<br>";
  echo $nome2;
  echo "<br>";