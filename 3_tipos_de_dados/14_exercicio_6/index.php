<?php

  // Array
  $carro1 = [
    'Jeep',
    'Azul',
    6,
    'SUV', 
    5, 
    55];


  //Array Associativo
  $carro2 = ['marca' => 'Jeep', 'cor' => 'Azul', 'cambio' => 6, 'estilo' => 'SUV', 'portas' => 5, 'litros' => 55];

  print_r($carro1); echo "<br>";
  echo "<br>";
  echo $carro1[0]; echo "<br>";
  echo $carro1[1]; echo "<br>";
  echo $carro1[2]; echo "<br>";
  echo $carro1[3]; echo "<br>";
  echo $carro1[4]; echo "<br>";
  echo $carro1[5]; echo "<br>";

  echo "<br>"; echo "<br>";

  // Array Associativo
  print_r($carro2);

  echo "<br>"; 
  echo "<br>"; 
  echo "Marca = ";  echo $carro2['marca'];  echo "<br>";
  echo "Cor = ";    echo $carro2['cor'];    echo "<br>";
  echo "Cambio = "; echo $carro2['cambio']; echo "<br>";
  echo "Estilo = "; echo $carro2['estilo'];    echo "<br>";
  echo "Portas = "; echo $carro2['portas']; echo " marchas";  echo "<br>";
  echo "Tanque = "; echo $carro2['litros']; echo "<br>";

  echo "<br>";

  $marca  = $carro2 ['marca'];
  $cor    = $carro2 ['cor'];
  $cambio = $carro2 ['cambio'];

  echo "O carro é um $marca é da cor $cor tem $cambio marchas";

?>