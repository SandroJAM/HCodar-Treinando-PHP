<?php

  $idade1 = 16;
  $idade2 = 18;
  $idade3 = 56;

  $maioridade = 18;

    if($idade1 <= $maioridade) {
    echo "Você é MENOR de idade! <br>";
  }

  echo "<br>";

  $msg1 = "Você não é maior de idade! <br>";
  $msg2 = "Você é maior de idade! <br>";
  $msg3 = "Não entrou na regra, é false! <br>";
  
  if($idade1 >= $maioridade) {
    echo $msg1;
  } else {
    echo $msg3;
  } 

  echo "<br>";

  if($idade2 >= $maioridade) {
    echo $msg2;
  }

  echo "<br>";

  if($idade3 >= $maioridade) {
    echo $msg2;
  }

