<?php

  $velocidade = 60;
  
  if($velocidade < 40) {
    echo "Velocidade menor que $velocidade KM está correta! <br>";
  } else if($velocidade == 40) {
    echo "Velocidade igual a $velocidade KM. Tome cuidado! <br>";
  } else {
    echo "Velocidade maior que $velocidade KM. Você está sendo multado! <br>";
  }

  echo "<br>"; echo "<br>";

  $velCar = 35;
  $velMax = 40;

  if($velCar < $velMax) {
    echo "Velocidade menor que $velCar KM está correta! <br>";
  } else if($velCar == $velMax) {
    echo "Velocidade igual a $velCar KM. Tome cuidado! <br>";
  } else {
    echo "Velocidade maior que $velCar KM. Você está sendo multado! <br>";
  }

  echo "<br>"; echo "<br>";

  $velCar = 40;

  if($velCar < $velMax) {
    echo "Velocidade menor que $velCar KM está correta! <br>";
  } else if($velCar == $velMax) {
    echo "Velocidade igual a $velCar KM. Tome cuidado! <br>";
  } else {
    echo "Velocidade maior que $velCar KM. Você está sendo multado! <br>";
  }