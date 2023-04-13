<?php

  // Decompor URL

  $url1 = "https://www.google.com";

  $arrayUrl1 = parse_url($url1);

  print_r($arrayUrl1);

  echo "<br>";

  $url2 = "http://www.horadecodar.com.br/?busca=php";

  $arrayUrl2 = parse_url($url2);

  print_r($arrayUrl2);

  echo "<br>";

  $url3 = "http://www.horadecodar.com.br/usuarios/sandromuniz?id=&nome=sandro";

  $arrayUrl3 = parse_url($url3);

  print_r($arrayUrl3);