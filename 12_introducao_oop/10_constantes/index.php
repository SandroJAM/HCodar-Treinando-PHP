<?php

  class Humano {

    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS =2;

    function mostrarConstante() { // Método

        echo self::BRACOS . "<br>";
    }

  }

  $humano1 = new Humano;

  echo $humano1::OLHOS . "<br>";

  $humano1->mostrarConstante();