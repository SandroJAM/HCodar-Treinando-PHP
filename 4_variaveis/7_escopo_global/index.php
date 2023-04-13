<?php

    // Escopo de variavel GLOBAL
    // 1 E acessivel fora de funcoes
    // 2 Nao sao acessiveis dentro de funcoes
    // 3 Precisam ser rotulada como global
        

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5 > 2) {
        $teste = "dsa";
        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

    function funcao() {
        $teste ="Eu conheço as minhas liberdades";
        echo "$teste local <br>"; // Vai gerar msg de erro porque $teste não está definio dentro da função!
    }

    funcao();

    function testandoGlobal() {
        global $teste;
        echo "$teste global funçao <br>";
    }

    testandoGlobal();