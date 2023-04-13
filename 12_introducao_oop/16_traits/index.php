<?php

  // Permitr o uso de herança por herança especificando a classe

 trait Objeto {

    public function teste() {
        echo "Testando TRAIT de objeto! <br>";
    }

  }

  trait Testando {

    public $y = 10;

    public function traitTeste() {
        echo "Este método é da TRAIT Testando <br>";
    }

  }

  // Permitr controlar melhor a distribuição de heranças

  class Central  {
    use Objeto;
    use Testando;
  }

  $x = new Central;

  $x->teste();

  $x->traitTeste();

  echo $x->y . "<br>";