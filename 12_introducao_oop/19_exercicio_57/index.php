<?php

class Animal {

    public $nome;
    public $cor;
    public $patas;

    function __construct($nome, $cor, $patas) {

        $this->nome = $nome;
        $this->cor = $cor;
        $this->patas = $patas;

    }

    public function exibirAnimal() {

        echo "O nome do animal é $this->nome, sua cor é $this->cor, e tem $this->patas patas <br>";

    }

}

$turca = new Animal("Turca", "Preta", 4); // Preenche propriedades do método

$turca->exibirAnimal(); // Executa o método

// Propriedades
$nome = "Tubarão";
$cor = "Branco";
$patas = "Barbatana";

$tubarao = new Animal($nome, $cor, $patas);

$tubarao->exibirAnimal(); // Executa o método