<?php

  //Classe
  class Car {

    // Propriedades
    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelha";

    // Métodos
    function ligar() {
        echo "VVVrrrruuuuuuuuu! <br>";
    }

  }

  $ferrari = new Car;

  $ferrari->rodas = 4;

  echo $ferrari->aro . "<br>";
  echo $ferrari->rodas . "<br>";

  $ferrari->cor = "Azul";

  echo $ferrari->cor . "<br>";

  $ferrari->ligar();