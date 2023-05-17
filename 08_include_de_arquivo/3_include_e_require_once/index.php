<?php

  // Incluir arquivos que não existem
  // include_once "teste.php"

  // Arquivos que existem
  include_once "teste2.php";
  include_once "teste2.php"; // O que acontece se colocar duas vezes? Nada!

  // Arquivos que não existem

  // require "teste.php";
  //require_once "teste.php";

  require_once "teste3.php";
  require_once "teste3.php"; // O que acontece se colocar duas vezes? Nada!

?>

 <p>Testando código</p>