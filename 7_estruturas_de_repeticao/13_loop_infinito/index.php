<?php

// Cuidado com loop infinito

for($i = 0; $i < 10; $i--) { // $i++ para reparar o código!
   echo "Nunca vai chegar a 10 porque o $i foi descrementado, causando LOOP Infinito! <br>";
}