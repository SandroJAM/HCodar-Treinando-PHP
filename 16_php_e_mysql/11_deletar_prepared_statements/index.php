<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cursophp";

$conn = new mysqli($host, $user, $pass, $db); /* Abri conexão */

$nome = "Mouse";

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome); // s = string, i = iterge, d = double

$stmt->execute();

$conn->close(); /* Encerrou conexão */