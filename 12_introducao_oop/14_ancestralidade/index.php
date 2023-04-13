<?php

  class Humano {

  }

  class Animal {

  }

  class Professor extends Humano {

  }

  $sandro = new Humano;

  $layca = new Animal;

  if($sandro instanceof Humano) {
    echo "Sandro É um Humano <br>";
  } else {
    echo "Sandro NÃO é um Humano <br>";
  }

  if($layca instanceof Humano) {
    echo "Layca É um Humano <br>";
  } else {
    echo "Layca NÃO é um Humano <br>";
  }

  $enzo = new Professor; // Criou um novo Humano

  if($enzo instanceof Professor) { // Testar se ele é Professor
    echo "Enzo É um Professor <br>";
  } else {
    echo "Enzo NÃO é um Professor <br>";
  }

  if($enzo instanceof Humano) { // Testar se ele é Humano que ele herdou todas as propriedade e métodos
    echo "Enzo É um Humano <br>";
  } else {
    echo "Enzo NÃO é um Humano <br>";
  }

  if($layca instanceof Professor) {
    echo "Layca É um Professor <br>";
  } else {
    echo "Layca NÃO é um Professor <br>";
  }