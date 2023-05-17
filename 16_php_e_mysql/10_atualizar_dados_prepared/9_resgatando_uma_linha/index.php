<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cursophp";

$conn = new mysqli($host, $user, $pass, $db); /* Abri conexão */

$id = 14;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "Sofá";
$descricao = "Semi novo, madeira com aglomerado";

$stmt->bind_param("ssi", $nome, $descricao, $id); // s = string, i = iterge, d = double

$stmt->execute();

if ($stmt->error) {
    echo "Erro: " . $stmt->error;
}

$conn->close(); /* Encerrou conexão */