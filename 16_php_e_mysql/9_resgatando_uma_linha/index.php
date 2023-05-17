<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cursophp";

$conn = new mysqli($host, $user, $pass, $db); /* Abri conexão */

$id = 6;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i", $id); // s = string, i = iterge, d = double

$stmt->execute();

$result = $stmt->get_result();

$item = $result->fetch_row();

print_r($item);

$conn->close(); /* Encerrou conexão */