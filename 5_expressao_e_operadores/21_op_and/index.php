<?php

if(5 > 10 && 10 > 5) { // AND false e true
    echo "Entrou no if 1 <br>";  
}

if(50 > 10 && 10 > 5) { // AND true e true
    echo "Entrou no if 2 <br>";  
}

if(50 > 10 && 10 > 500) { // AND true e false
    echo "Entrou no if 3 <br>";  
}

if(50 > 100 && 10 > 500) { // AND true e false
    echo "Entrou no if 4 <br>";  
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;

// O operador AND começa validanado da esquerda para direita!

echo "<br>";

if($a > $b && $c == $d) { // AND
   echo "Entrou no if 5 <br>"; 
}

echo "<br>";

if($b <= $a && $c >= $d) { // AND
   echo "Entrou no if 6 <br>"; 
}

echo "<br>";

if($b === $a && $c > $d) { // AND
   echo "Entrou no if 7 <br>"; 
}

echo "<br>";

if(($b <= $a && $c >= $d) && $a > $b) { // AND com AND
   echo "Entrou no if 8 <br>"; 
}

echo "<br>";

if(($b <= $a && $c >= $d) && $c === $a) {
   echo "Entrou no if 9 <br>"; 
}