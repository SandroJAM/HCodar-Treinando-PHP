<?php

  // Se abrir essa página em uma guia anônima o array() vai está vázio
  // por    ue o PHP não sabe que eu sou na aba anônima.
  // O PHP só sabe na aba que tem o ID da página salvo no mecânismo de cookies

  session_start();

  print_r($_SESSION);

 ?>