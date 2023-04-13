<?php

 $a = 10;

 $b = 15;

 function lembraEscopo() {

   $a = 5;
   global $b;
   static $c;
   $a++; $b++; $c++;

   echo "ESCOPO LOCAL DE A: $a <br>";
   echo "ESCOPO GLOBAL DE B NA FUNÇÃO : $b <br>";
   echo "ESCOPO STATIC DE C NA FUNÇÃO : $c <br>"; 
 }

 echo "ESCOPO GLOBAL DE A: $a <br>";  echo "<br>";
 echo "ESCOPO GLOBAL DE B: $b <br>";  echo "<br>";

 lembraEscopo();

 echo "ESCOPO GLOBAL DE B: $b <br>";

 lembraEscopo();