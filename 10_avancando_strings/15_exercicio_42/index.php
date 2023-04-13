<?php

  $frase = "Cadê o meu queijo? Ele estava aqui em cima!";

  echo substr($frase, 12, 6 );
  echo "<br>";
  echo substr($frase, 24, 6 );

  echo "<br>";

  $queijo = substr($frase, 12, 6 );

  $estava = substr($frase, 24, 6 );

  print $queijo . " e " . $estava;