<?php

  class Humano {

    public function falar() {

        echo "Olá!";

    }

  }

  $sandro = new Humano;

  $teste = 10;

  if(is_object($sandro)) { // Identifica se é um objeto

    echo "É um objeto <br>";

  } else {

    echo "NÃO é um objeto <br>";
    
  }

  if(is_object($teste)) {

    echo "É um objeto <br>";

  } else {

    echo "NÃO é um objeto <br>";

  }

  echo get_class($sandro) . "<br>"; // Qual a classe do objeto

  if(method_exists($sandro, "falar")) {
 
    echo "Método existe <br>";

  } else {

    echo "Método NÃO existe <br>";

  }   
