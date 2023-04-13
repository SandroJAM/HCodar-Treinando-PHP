<?php

  class Pessoa {

    function falar() {
        echo "Olá! Eu sou um objetos! <br>";
    }

    function somar($x, $y) {
        echo $x + $y . "<br>";
    }

  }

  $sandro = new Pessoa;

  $sandro->falar(); echo "<br>";
  $sandro->falar(); echo "<br>";

  $barbara = new Pessoa;

  $barbara->falar(); echo "<br>";

  $sandro->somar(2, 2);
  echo "<br>";
  $barbara->somar(10, 12);
