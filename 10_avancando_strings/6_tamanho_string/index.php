<?php

  $str1 = "Esta string é muito grande";
  $str2 = "Esta não é";

  echo strlen($str1) . "<br>";
  echo strlen($str2) . "<br>";

  $len1 = strlen($str1);
  $len2 = strlen($str2);

  if($len1 > $len2) {
    echo "A String 1 é maior que a string 2 <br>";
  } else {
    echo "A String 2 é maior que a string 1 <br>";
  }