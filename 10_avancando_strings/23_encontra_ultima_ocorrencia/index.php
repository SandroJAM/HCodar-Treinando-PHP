<?php

  $str = "Testando encontrado palavra teste, em uma string que tem teste";

  $palavra1 = strrpos($str, "teste");

  echo "$palavra1<br>";

  $palavra2 = strrpos($str, "teste");

  echo "$palavra2 <br>";

  if(strrpos($str, "Java") === false) {
    echo "A palavra Java não foi encontrada <br>";
  }

  $palavra3 = substr($str, strpos($str, "teste"), 5);
  echo "$palavra3 <br>";