<?php

  // Classe

  class Cachorro {

    // Primeiro método
    function latir() {
        echo "Au Au Au Au";
    }

    // Segundo método passando parâmetros
    function andar($m) {
        echo "O cachorro andou $m metros <br>";
    }

  }

  // Instâncias
  $viraLata = new Cachorro;
  $pastorAlemao = new Cachorro;

  // Usar métodos
  $viraLata->latir();
  echo "<br>";
  $viraLata->andar(1000);

  echo "<br>";

  $pastorAlemao->latir();
  echo "<br>";
  $pastorAlemao->andar(100);