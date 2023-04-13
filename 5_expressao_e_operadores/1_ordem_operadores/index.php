<?php

  echo 3 + 2 * 5; // no caso multiplicação executa primeiro!
  echo "<br>";
  echo (3 + 2) * 5; //no caso a soma executa primeiro!
  echo "<br>";

  echo 5 + 2 / 10; // no caso a divisão executa primeiro!
  echo "<br>";

  $a = 5; $b = 2; $c = 10;
  echo $a + $b / $c;
  echo "<br>";
  echo $c + $b /$a;
  echo "<br>";
  $d = $a * $b * $c;
  echo $d;
  echo "<br>";
?>