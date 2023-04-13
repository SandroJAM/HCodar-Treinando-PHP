<?php

  $data = new DateTime();

  print_r($data);
  echo "<br>";

  $data->setDate(2000, 03, 28);

  print_r($data);
  echo "<br>";

  $data->setTime(23, 30, 12);

  print_r($data); // HH:MM:SS
  echo "<br>";

  echo $data->format('d/m/Y') . "<br>";