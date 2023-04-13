<?php

  $frase1 = "este item está em ";
  $frase2 = "promocao";

  echo ucfirst($frase1) . strtoupper($frase2) . "!";
  
  echo "<br>";

  $frase3 = "este item está em promocao";
  
  echo "<br>";
  print substr($frase3, 0, 17) . " " . strtoupper(substr($frase3, 18, 26));