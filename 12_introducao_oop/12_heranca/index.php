<?php

  class Humano {

    public $idade = 56;

    public function falar() {
        echo "Olá Mundo PHP! <br>";
    }

    private function gritar() {
        echo "PHP É MUITO BOMMMMMMM! <br>";
    }

    public function acessarGritar() {
        $this->gritar();
    }

    protected function falarBaixo() {
        echo "bbaaaiiixxxxinnnnnnho! <br>";
    }

    public function acessarFalarBaixo() {
        $this->falarBaixo();
    }

  }

  class Programador extends Humano { // A grande sacada

    public function acessarFalarBaixoProgramador() {
        $this->falarBaixo(); // Método protegido acessa
        //$this->gritar(); Método privado não acessa
    }

  }

  $sandro = new Humano;

  $sandro->falar();
  $sandro->acessarGritar();
  // $sandro->falarBaixo(); Tem que criar acessarFalarBaixo
  $sandro->acessarFalarBaixo();


  $enzo = new Programador;

  echo $enzo->idade . "<br>";

  $enzo->falar();
  $enzo->acessarGritar();
  $enzo->acessarFalarBaixo();
  $enzo->acessarFalarBaixoProgramador(); // A grande sacada