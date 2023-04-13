<?php

  // Escopo de variável LOCAL --> Não é acessível fora da mesma e reseta quando a função é finalizada!
  $x = 10;

  echo "$x <-- global 1 <br>";

  function teste() {
    $x = 5;
    echo "$x <-- valor local na função teste! <br>";
    // $x reseta ao encerrar a função teste()
  }

  teste();

  echo "$x <-- global 1 - continua com o mesmo valor! <br>";

  teste();

  function testando() {
    $x = 12;
    echo "$x <-- valor local na função testando! <br>";
  }

  $x = 99; // Alterando o valor da variável x no global

  testando();

  teste();

  echo "$x <-- global 3 após se alterado no código! <br>";