<?php

  class Car {

    public $rodas = 4;
    
    // public $vidro = "Sem película";
    private $vidro = "Sem película"; // Não pode alterar em outras classes

    protected $portas = 4;

    // public function peliculaDeFabrica() {
    //    $this->vidro = $pelicula;
    // }

    public function getVidro() {
        return $this->vidro;
    }

    public function getPortas() {
        return $this->portas;
    }

  }

  class Mecanico {

    public function alterarRodas($obj) {
        $obj->rodas = 5;
    }

    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro = $pelicula;
    }

  }

  $carro = new Car;

  echo $carro->rodas . "<br>";

  $mecanico = new Mecanico;

  $mecanico->alterarRodas($carro);

  echo $carro->rodas . "<br>";

  // Não pode alterar porque é privado
  // $mecanico->colocarPelicula($carro, "G20");

  // $mecanico->peliculaDeFabrica($carro, "G70");

  // echo $carro->vidro . "<br>";

  echo $carro->getVidro() . "<br>";

  // $carro->vidro = "teste";

  //echo $carro->$portas . "<br>";

  echo $carro->getPortas() . "<br>";