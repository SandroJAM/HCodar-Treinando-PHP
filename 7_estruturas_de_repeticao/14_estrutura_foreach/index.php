<?php

  // ForEACH - Funciona é orientada expecificamente a um ARRAY

  $nomes = ["Sandro", "Barbara", "Enzo", "Dona Zil", "Salomao"];

$nota = 10;

  foreach ($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";
    if($nome == "Salomao") {
      echo "O melhor - Nota $nota <br>"; 
    }
  }