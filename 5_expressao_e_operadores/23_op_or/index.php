<?php

  // Basta um dos lados ser verdaeiro para OR ativar!

  if(5 > 2 || 3 < 4) { // OR true or true
    echo "A operação 1 é verdadeira <br>"; echo "<br>";
  }

  if(5 > 2 || 30 < 4) { // OR true or false
    echo "A operação 2 é verdadeira <br>"; echo "<br>";

}
  if(5 > 20 || 3 < 4) { // OR false or true
    echo "A operação 3 é verdadeira <br>"; echo "<br>";
  }

  if(5 > 20 || 30 < 4) { // OR false or false
    echo "A operação 4 é verdadeira <br>"; echo "<br>";
  }

  $a = 10;
  $b = 20;
  $c = 30;
  $d = 40;

  if($a > $b || $d > $c) { // OR False or True
    echo "Sim! A operação 5 é verdadeira <br>"; echo "<br>";
  }

  if(($a > $b || $d > $c) && $c < $d){ // OR com AND True or True
    echo "Sim! A operação 6 é verdadeira <br>"; echo "<br>";
  }

  if(($a > $b && $d > $c) || $c < $d){ // AND com OR False or False
    echo "Sim! A operação 7 é verdadeira <br>"; echo "<br>";
  }

?>