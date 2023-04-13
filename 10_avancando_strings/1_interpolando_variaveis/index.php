<?php

// Interpolar váriavel é pegar uma referência setada na memário e interpretar o valor

 $idade = 56;
 $nome = "Sandro Muniz";
 $profissao = "Analista de Sistemas";

 echo "Eu sou $nome e tenho $idade anos, e atuo como $profissao! <br>";

 echo "<br>";

 echo "Eu sou {$nome} e tenho {$idade} anos, e atuo como {$profissao}! <br>";

// O ideal e manter apenas com uma das sintaxes