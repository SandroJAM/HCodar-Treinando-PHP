<?php

$x = 0;

while($x < 10) {
    echo "O valor de X é $x <br>";
    $x++;
    if($x === 5) {
        echo "Encerrando o loop em 6 <br>";
        break;
    }
}

echo "<br>"; echo "Saiu do loop -- Continua <br>";