<?php
 // Incremento

  $um_Contador = 0;
  $um_teste = "TESTANDO SE VAI ESCREVER!";

  do {

    echo "Testando incremento DO-WHILE $um_Contador <br>";

    if($um_Contador == 2) {
      echo "$um_teste <br>";
    }

    $um_Contador++;

  } while($um_Contador < 10);

  echo "<br>";

   // Decremento
 
   $um_Conta = 10;

   do {
     echo "Testando decremento DO-WHILE $um_Conta <br>"; 

     if($um_Conta == 2) {
        echo "$um_teste <br>";
      }

     $um_Conta--;
   } while($um_Conta > 0);