<?php

function parOuImpar($numero) {
    if($numero % 2 === 0) { // % 2 divisão de módulo e exatamente 0 (zero)
        echo "O número $numero é par <br>";
    } else {
        echo "O número $numero é ímpar <br>";
    }
}

parOuImpar(2);
parOuImpar(3);
parOuImpar(13);
parOuImpar(26);