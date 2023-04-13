<?php

  // Classe anônima

  $pessoa = new class() {

    public $nome = "Sandro Muniz";

    public function dizerNome() {
        echo "Olá meu nome é $this->nome <br>";
    }

  };
  
  // Nesse caso tem que fechar a declaração com ponto e vírgula por ser uma
  // instrução de variável e não vai poder fazer nenhuma herança.

  echo $pessoa->nome . "<br>";

  $pessoa->dizerNome();