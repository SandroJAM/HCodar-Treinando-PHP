<?php
 $a = "teste";
 $b = 13.3;

 if(is_float($a)) {
    echo "É float 1! <br>";
 }

 if(is_float($b)) {
    echo "É float 2! <br>";
 }

 if(is_float(1313.13)) { //Número RAD_Float
    echo "É float 3! <br>";
 }

 if(is_float("teste")) { //Número RAD_Float
    echo "É float 4! <br>";
 }
?>