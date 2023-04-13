<?php

  $pessoa = ["Sandro Muniz", 29, "Analista de Sistemas", "Azul"];

  print_r($pessoa);
  echo "<br>";

  list($nome, $idade, $profissao, $corDosOlhos) = $pessoa; echo "<br>";

  echo "$nome <br>";
  echo "$idade <br>";
  echo "$profissao <br>";
  echo "$corDosOlhos <br>";