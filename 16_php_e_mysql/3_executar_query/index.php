<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cursophp";

$conn = new mysqli($host, $user, $pass, $db); /* Abri conexão */

$sql = "SELECT * FROM itens";

$result = $conn->query($sql); // Atribuindo o Método Query a uma variável

printf($result);

$conn->close(); /* Encerrou conexão */
