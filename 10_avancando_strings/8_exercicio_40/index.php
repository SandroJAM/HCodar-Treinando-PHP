<?php

  $frase = "O rato roeu a roupa do Rei de Roma";

  $contadorDeAs = 0;

  for($i =0; $i < strlen($frase); $i++) {

    if($frase[$i] === "a") {
        $contadorDeAs++;
    }

  }

  echo "O número da A's na frase é de : $contadorDeAs";