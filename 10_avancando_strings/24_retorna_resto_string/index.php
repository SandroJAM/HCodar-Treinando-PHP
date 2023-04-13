<?php

  $str = "Se algo for encontrado a funcação retorna o resto da string";

  $resto1 = strstr($str, "resto");

  echo "$resto1 <br>";

  $resto2 = "string";

  $resto2 = strstr($str, $resto2);

  echo "$resto2 <br>";

  if(strstr($str, ".NET") === false) {
    echo " Não encontramos a String! <br>";
  }