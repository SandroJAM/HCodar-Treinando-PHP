<?php

 echo "Testando texto com aspas duplas <br>";
 echo 'Testando texto com aspas simples <br>';
 // Duplas com simples pode!
 echo "Ele disse: 'Olá!' <br>";
 // SImples com duplas pode!
 echo 'Ele disse: "Olá!" <br>';
//Nota: Não pode simples com simples e nem duplas com duplas
$idade = 15;
echo "Ele tem $idade anos"; // Considera variáveis dentro do texto
echo "<br>";
echo 'Ele tem $idade anos'; // Não considera variáveis dentro do texto