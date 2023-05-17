<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cursophp";

$conn = new mysqli($host, $user, $pass, $db); /* Abri conexão */

//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$table = "itens";
$nome = "Xícara";
$descricao = "Usada com características grega";

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q); // Método Query

$conn->close(); /* Encerrou conexão */
