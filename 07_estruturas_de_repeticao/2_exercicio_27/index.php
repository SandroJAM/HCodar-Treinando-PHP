<?php

  $arr = [5, "Sandro", true, false, "Enzo", 12.8, "Barbara", true, [],"DEUS", 8, 20, "Juntos" ];

  $x = count($arr);
  $y = 0;

  while($y < $x) {

    if(is_string($arr[$y])) {
        echo $arr[$y] . "<br>";
    }

    $y++;

  }