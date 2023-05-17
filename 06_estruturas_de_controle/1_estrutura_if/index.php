<?php
  
  // if checa se a expressão é verdadeira!

  // Condição verdadeira!
  if(5 > 2) { 
    echo "Sim! 5 é maior do que o 2. <br>";
  }

  // Condição falsa!
  if(2 >= 5) { 
    echo "Não vai entrar nesse if porque retornou falso!";
  }

  // Utiliza operador lógico!

  if(10 === 10 && 9 > 3) {
    echo "Sim! 10 é igual a 10 AND 9 é maior do que 3. <br>";
  } 

  // Utilizando variáveis!

  $a = 10;
  $b = 5;
  $c = "Deu certo, entrou no if! <br>";

  if($a > $b) {
    echo $c;
  } 