<?php

  $carro = ["Jaguar", 3.0, "Azul", 19, "Teto Solar", "Automático"];

  print_r($carro);
  echo "<br>";

  list($marca, $motor, $cor, $roda, $acessorio, $cambio) = $carro;
  echo "<br>";

  echo "Marca - $marca <br>";
  echo "Motor - $motor <br>";
  echo "Cor - $cor <br>";
  echo "Aro da Roda - $roda <br>";
  echo "Acessório - $acessorio <br>";
  echo "Câmbio Marcha - $cambio <br>";