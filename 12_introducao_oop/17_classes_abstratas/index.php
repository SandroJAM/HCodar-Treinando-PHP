<?php

  abstract class Teste { // Classes abstratas não podem ser instânciadas por si só

    public static function testandoClasse() { // Métedo estático

      echo "Esse método é de uma classe ABSTRATA <br>";

    }

    abstract public function testeABS();

  }

  // $teste = new Teste; - Não posso instânciar classes abstratas

  // A idéia principal é que posso executar métodos de uma classe sem que ela esteja instânciada

  Teste::testandoClasse(); // Chamar o método da Classe direto caso seja estático

  class Nova extends Teste {

    public function testeABS() {

      echo "Teste método abstrato <br>";

    }

  }

  $n = new Nova;
  $n->testeABS(); // instânciar e poder utilizar esse método