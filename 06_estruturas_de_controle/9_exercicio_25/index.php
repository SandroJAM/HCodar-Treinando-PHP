<?php
  $a = 12;
  $b = 89;
  $c = "Teste";
  
  if(is_int($a) || is_float($a)) {

    $multi1 = $a * 2;
    
    if($multi1 > 100) {
      echo "O $multi1 número é maior que 100! <br>";   
    } else {
      echo "O $multi1 número não é maior que 100! <br>";  
    }

  } else {
    echo "Não é um númmero! <br>";
  }

  echo "<br>";

  if(is_int($b) || is_float($b)) {

    $multi1 = $b * 2;
    
    if($multi1 > 100) {
      echo "O $multi1 número é maior que 100! <br>";   
    } else {
      echo "O $multi1 número não é maior que 100! <br>";  
    }

  } else {
    echo "Não é um númmero! <br>";
  }

  echo "<br>";

  if(is_int($c) || is_float($c)) {

    $multi1 = $c * 2;
    
    if($multi1 > 100) {
      echo "O $multi1 número é maior que 100! <br>";   
    } else {
      echo "O $multi1 número não é maior que 100! <br>";  
    }

  } else {
    echo "$c não é um númmero! <br>";
  }