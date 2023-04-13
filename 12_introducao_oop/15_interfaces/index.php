<?php

  // Modelo de definição de uma classe

  interface Caracteristicas {

    const nome = "Sandro Muniz"; // Constantes não podem ser alteradas

    public function falar();

  }

  class Humano implements Caracteristicas {

    public $idade = 56;

    public function falar() { // Método falar
        echo "Olá Mundo! <br>";
    }

    public function dizerNome() {
        echo  "Meu nome é " . self::nome . "<br>";
    }

  }

  $sandro = new Humano;

  $sandro->falar();

 $sandro->dizerNome();

