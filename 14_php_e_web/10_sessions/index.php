<?php

  // As sessions são salva em arquivos - php.ini --> ssession.save_path
  // Formato do PHP e ou WDDX - Web Distributed Data eXchange

  session_start();

  // print_r($_SESSION);

  $_SESSION['nome'] = "Sandro";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá SESSION!</h1>
</body>
</html>