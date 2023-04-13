<?php

class Carro {

    public $marca;
    public $cor;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($velocidade) {
        $this->velocidadeMaxima = $velocidade;
    }

    function getVelocidadeMaxima() {
        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }

}

$carro1 = new Carro;
$carro1->cor = "Azul Turquesa";
$carro1->marca = "BMW";
$carro1->setVelocidadeMaxima(350);
$carro1->getVelocidadeMaxima();

$carro2 = new Carro;
$carro2->cor = "Cinza Grafite";
$carro2->marca = "VOLVO";
$carro2->setVelocidadeMaxima(375);
$carro2->getVelocidadeMaxima();

