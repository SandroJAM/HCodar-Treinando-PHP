<?php

  $arr = [
    'nome' => 'Sandro Muniz',
    'idade' => 56
  ];

  if(array_key_exists("nome", $arr)){
    echo "A chave existe! - EXISTS <br>";
  } else {
    echo "A chave não existe! - EXISTS <br>";
  }

  if(isset($arr['nome'])) {
    echo "A chave existe! - ISSET <br>";
  } else {
    echo "A chave não existe! - ISSET <br>";
  }

  if(isset($x)) {
    echo "A VAR existe! - x <br>";
  } else {
    echo "A VAR não existe! - x <br>";
  }

  $x = 10;

  if(isset($x)) {
    echo "A VAR existe! - x <br>";
  } else {
    echo "A VAR não existe! - x <br>";
  }