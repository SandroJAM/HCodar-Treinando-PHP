<?php

  //PHP possui paradgma de orientação a objetos - Podem criar métodos e propriedades

  class Pessoa { // A classe é molde do objeto

    function falar() { // Ações do objeto
        echo "Olá pessoal!";
    }

  }

  $sandro = new Pessoa(); // Cria um novo objeto a partir do molde

  $sandro->nome = "Sandro Muniz"; // Propriedade do objeto

  echo $sandro->nome;

  echo "<br>";

  $sandro->falar(); // Invocando um método