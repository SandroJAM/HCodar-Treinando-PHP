<?php

$a = true;

if(is_bool($a)) {
    echo "É um booleano 1!"; echo "<br>";
}

if(is_bool(0)) {
    echo "É um booleano 2!"; echo "<br>";

}
if(is_bool(false)) {
    echo "É um booleano 3!"; echo "<br>";
}

if(0 == false) {
    echo "0 (zero) é considerado falso! <br>";
}

if(0.0 == false) {
    echo "0.0 (zero) também é considerado falso! <br>";
}