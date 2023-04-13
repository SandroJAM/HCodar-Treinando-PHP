<?php

  // Data atual

  $data = new DateTime();

  echo $data->format('d/m/y') . "<br>"; // 13/04/23

  echo $data->format('D - M - Y') . "<br>"; // Thu - Apr - 2023

  echo $data->format('l . F . Y') . "<br>"; // Thursday . April . 2023

// Data atual + 5 dias

  $data->modify('+5 days');

  echo $data->format('d/m/y') . "<br>"; // 13/04/23 +5 dias 18/04/23

  $data->modify('-3 year');

  echo $data->format('d/m/y') . "<br>"; // 13/04/23 -3 anos 18/04/20