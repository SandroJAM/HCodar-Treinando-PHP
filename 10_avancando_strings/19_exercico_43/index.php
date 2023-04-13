<?php

  $str = "Carro - Navio - Helicóptero - Barco - Janganda";
  
  $arr = explode(" - ", $str);

  $item = 0;

  for($i = 0; $i < count($arr); $i++) {
    $item++;
    echo "Item $item: $arr[$i] <br>";
  }