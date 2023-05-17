<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cursophp";

$conn = new mysqli($host, $user, $pass, $db); /* Abri conexão */

$nome = "Suporte de Microfone";
$descricao = "Novo fabricado na Dinamarca";

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

$stmt->bind_param("ss", $nome, $descricao); // s = string, i = iterge, d = double

$stmt->execute();

$conn->close(); /* Encerrou conexão */
