<?php

$host = "localhost";
$db   = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

// Um resultado
// $data = $stmt->fetch(PDO::FETCH_ASSOC);
// print_r($data);

// Todos os resultados
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($itens);

// $conn->close(); /* Encerrou conexão
