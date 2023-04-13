<?php

 $cincoDias = strtotime("5 days"); // Forma de referênciar em datas

 echo $cincoDias . "<br>";

 echo "<br>";

 $dezDias = strtotime("10 days");

 echo $dezDias . "<br>";

 $dataAtualMaisCinco = date('d/m/y', $cincoDias);

 echo $dataAtualMaisCinco . "<br>";

 $dataAtualMaisDez = date('d/m/y', $dezDias);

 echo $dataAtualMaisDez . "<br>";

 $doisMeses = strtotime("2 months");

 echo $doisMeses . "<br>";

 $dataAtualMaisDoisMeses = date('d/m/Y', $dezDias); 

 $dataAtualMaisDoisMeses . "<br>";

 $dozeAnos = strtotime("12 years");

 echo date('d/m/y', $dozeAnos) . "<br>";