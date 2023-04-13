<?php

  class Animal {

    public $nome;

    function escolherNome($nome) { // Chamar propriedade com this
        $this->nome = $nome;
    }

    function latir1() {
        echo "Au Au Au Au Au <br>";
    }

    function latir2() {
        return "Rhummm Au Au Au Rhummm Au Au <br>";
    }

    function latirForte() { // Chamar método com this
        return strtoupper($this->latir2());
    }

  }

  // A referência this é o próprio objeto que está invocando o método

  $animal1 = new Animal;

  echo "O nome do animal é: $animal1->nome <br>";

  $animal1->escolherNome("Layca");

  echo " O nome do animal é: $animal1->nome <br>";

  $animal1->latir1();

  echo "<br>";

  echo $animal1->latir2();

  echo "<br>";

  echo $animal1->latirForte();