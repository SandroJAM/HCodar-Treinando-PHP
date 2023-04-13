<?php

  // Não é indicado alterar o fuso horário

  // date_default_timezone_set

  $data = new DateTime();

  print_r($data);
  echo "<br>";

  // DateTime Object ( [date] => 2023-04-13 20:05:46.995533 [timezone_type] => 3 [timezone] => Europe/Berlin )

  date_default_timezone_set('America/Recife');

  $data = new DateTime();

  print_r($data);
  echo "<br>";