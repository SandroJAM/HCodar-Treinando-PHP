<?php

  $a = 1;
  $b = "1";

  if ($a != $b) {
    echo "A é diferente de B 1 <br>";
  }

  echo "<br>";

  if ($a !== $b) {
    echo "A é diferente de B 2 <br>";
  }

  echo "<br>";

  if (1 !== 2) {
    echo "Não é idêntico a 1 3 <br>";
  }

  echo "<br>";

  if (1 !== "1") {
    echo "Não é idêntico a 2 4 <br>";

}

echo "<br>";

  if ([] !== "abc") {
    echo "Não é idêntico a 2 5 <br>";
  }

?>