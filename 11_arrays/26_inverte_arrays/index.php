<?php

  // array_reverse

  $arr1 = range(1, 5);

  $arrRev1 = array_reverse($arr1);

  print_r($arr1);
  echo "<br>";
  print_r($arrRev1);
  echo "<br>";

  echo "<br>";

  $arr2 = ["Sandro", 56, true, [1, 2]];

  $arrRev2 = array_reverse($arr2);

  print_r($arr2);
  echo "<br>";
  print_r($arrRev2);
  echo "<br>";