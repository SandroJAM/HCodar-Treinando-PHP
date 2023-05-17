<?php

  // Passando parâmetros atribuindo valores
  function teste($a = "teste") {
   echo "O valor de A é: $a <br>"; 
  }

  teste();
  teste("PassaOutroValor");

  // Passando parâmetros atribuindo e com valor DEFAULT

  function testando($b, $a = "x") {

    echo "O valor de A é: $a e de B é: $b <br>";
    
  }

testando("1");