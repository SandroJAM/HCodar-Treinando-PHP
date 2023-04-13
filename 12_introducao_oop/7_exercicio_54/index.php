<?php

  class Pessoa { // <-- Classe

    public $nome; // <-- Propriedade 1
    public $idade; // <-- Propriedade 2

    function andar($m) { // <-- Método 1
        echo "A pessoa andou $m metros <br>";
    }

  }

  // Instânciando objetos

  $pessoa1 = new Pessoa; // Objeto 1
  $pessoa1->nome = "Sandro Muniz";
  $pessoa1->idade = 56;
  echo "O nome da pessoa é $pessoa1->nome e tem $pessoa1->idade anos <br>";
  $pessoa1->andar(4000);
  echo "<br>";

  $pessoa2 = new Pessoa; // Objeto 2
  $pessoa2->nome = "Barbara Vasconcelos";
  $pessoa2->idade = 47;
  echo "O nome da pessoa é $pessoa2->nome e tem $pessoa2->idade anos <br>";
  $pessoa2->andar(2000);
  echo "<br>";

  $pessoa3 = new Pessoa; // Objeto 2
  $pessoa3->nome = "Enzo Barbosa";
  $pessoa3->idade = 6;
  echo "O nome da pessoa é $pessoa3->nome e tem $pessoa3->idade anos <br>";
  $pessoa3->andar(1000);
  echo "<br>";