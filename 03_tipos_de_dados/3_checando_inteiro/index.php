<?php

if(is_int(5)) { // true
   echo "É um múmero inteiro! <br>";
}

if(is_int("Não é inteiro!")) { // false
   echo "Não é um número inteiro 2 <br>"; 
}

$a = 10;

if(is_int($a)) { // true
  echo $a; echo "<br>"; echo "É um inteiro 3 <br>";
}

?>