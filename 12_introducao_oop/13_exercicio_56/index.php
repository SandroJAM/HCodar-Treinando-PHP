<?php

  class Humano {

    public $maos = 2;
    public $pernas = 2;

    public function falar() {
        echo "Olá, eu sou humano! <br>";
    }

  }

  class Professor extends Humano {

    public $disciplina = "Matemática";

    public function estaLecionando() {
        echo "O professor está dando aula de $this->disciplina <br>";
    }   

  }

  $sandro = new Humano;

  echo "$sandro->maos <br>";
  $sandro->falar();

  $barbara = new Professor;

  echo "$barbara->pernas <br>"; // propriedade da classe PAI
  echo "$barbara->disciplina <br>"; // propriedade da classe FILHA

  $barbara->falar(); // Médoto da classe PAI
  $barbara->estaLecionando(); // Método da classe FILHA