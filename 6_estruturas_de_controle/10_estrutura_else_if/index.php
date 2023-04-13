<?php

  if(10 > 5) {

    echo "Entrou no IF! <br>";

  } else if(10 > 6) {
    echo "Entrou no ELSE do IF! <br>";
  }
  
  if(10 < 5) {

    echo "Entrou no IF! <br>";

  } else if(10 > 6) {
    echo "Entrou no ELSE do IF! <br>";
  }

  if(10 < 5) {

    echo "Entrou no IF! <br>";

  } else if(10 < 6) {
    echo "Entrou no ELSE do IF! <br>";
  } else {
    echo "Entrou no ELSE! <br>";
  }

  if(10 < 5) {

    echo "Entrou no IF! <br>";

  } else if(10 < 6) {
    echo "Entrou no ELSE do IF 2! <br>";
  } else if(11 > 1) {
    echo "Entrou no ELSE do IF 2! <br>";
  } else {
    echo "Entrou no ELSE! <br>";
  }

  $a = 10;
  $b = 5;
  $msg = "ENTROU NO ELSE IF!";

  if(10 < 5) {

    echo "Entrou no IF! <br>";

  } else if($a < $b) {
    echo $msg;
    echo "<br>";
  } else if(11 > 1) {
    echo "Entrou no ELSE do IF 3! <br>";
  } else {
    echo "Entrou no ELSE! <br>";
  }