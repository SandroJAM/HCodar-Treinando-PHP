<?php

  function defineCorCarro($cor = "vermelha") {
    return "A cor do carro é: $cor";
  }

 // Passando parâmetro default
 $carroVermelho = defineCorCarro();
 echo $carroVermelho . "<br>";

 echo "<br>";

 // Passando parâmetro definindo a cor
 $carroAzul = defineCorCarro("Azul");
 echo $carroAzul . "<br>";