<?php

  if(5 > 2) { // NOT true
    echo "A operação 1 é verdadeira <br>";
  }

  if(!(5 > 2)) { // NOT true que vira false - ! inverte o valor da operação lógica
    echo "A operação 2 é verdadeira <br>";
  }

  if(!(5 > 20)) { // NOT false que vira true - ! inverte o valor da operação lógica
    echo "A operação 3 é verdadeira <br>";
  }

$a = 10;
$b = 20;

if(!($a >= $b)) { // NOT false que vira true - ! inverte o valor da operação lógica
    echo "A operação 4 é verdadeira <br>";
  }