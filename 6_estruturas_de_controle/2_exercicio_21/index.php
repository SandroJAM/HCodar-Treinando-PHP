<?php

  $a = 12;
  $b = 11;
  $c = 11;

  $nome1 = "Bruna";
  $nome2 = "Helena";

  if(5 > 2) {
    echo "Sim! 5 é maior do que o 2! <br>";
  }

  if("Sandro" != "Enzo") {
    echo "Entrou no if porque Sandro é diferente de Enzo! <br>";
  }

  if($nome1 != $nome2) {
    echo "Entrou no if porque " . $nome1 . " é diferente de " . $nome2 . " ! <br>";
  }

  if($a <= $b) {
    echo "Não! . $a . não é menor e nem igual a . $b . !";
  }

  if($c <= $b) {
    echo "Sim! . $c . não é menor, mais é igual a . $b . !";
  }

