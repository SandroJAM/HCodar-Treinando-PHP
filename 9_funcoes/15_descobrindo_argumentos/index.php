<?php

  // Funções func_get_args e func_num_args

  function soma($a, $b) {

    print_r(func_get_args());
    echo "<br>";
    print_r(func_num_args());

    return $a + $b;

  }

  soma(2, 4);