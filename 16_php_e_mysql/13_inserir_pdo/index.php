<?php

$host = "localhost";
$db   = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

// Passar para o PDO parâmetros por referência e não por string literal

$nome = "Mouse";
$descricao = "De jogos em excelente estado";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();
