<?php

  $str = "Esta é a minha string";

  $minha = substr($str, 10, 5); //String pai + indice icinical + comprimento da string

  echo $str . "<br>";
  echo $minha . "<br>";

  $str2 = "Testando esta string abc";

  $novaString1 = substr($str2, 8);

  echo $novaString1 . "<br>";

  $novaString2 = substr($str2, 8, -3);

  echo $novaString2 . "<br>";