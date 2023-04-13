<?php

  // Recurso não super utilizado

  if(10 > 2) {

    echo "entrou no primeiro IF 1 <br>";

    if("teste" == "teste") {

        echo "Entrou no segundo IF 1 <br>";
        
    }

  }

  echo "<br>";

  if(10 > 2) {

    echo "entrou no primeiro IF 2 <br>";

    if("teste" != "teste") {

        echo "Entrou no segundo IF 2 <br>";

    } else {
        echo "Entrou no segundo ELSE 2 <br>";
    }

  }

  echo "<br>";

  if(10 < 2) {

    echo "entrou no primeiro IF 3 <br>";

    if("teste" != "teste") {

        echo "Entrou no segundo IF 3 <br>";

    } else {
        echo "Entrou no segundo ELSE 3 <br>";
    }

  } else {
    echo "Entrou no primeiro ELSE 3 <br>";
  }

  echo "<br>";

  $escopo = 810;

  if("teste" == "teste") {

    echo "entrou no primeiro IF 3 <br>";

    echo $escopo; echo "<br>";

    if("teste" != "teste") {

        echo "Entrou no segundo IF 3 <br>";

    } else {
        echo "Entrou no segundo ELSE 3 <br>";
    }

  } else {
    echo "Entrou no primeiro ELSE 3 <br>";
  }