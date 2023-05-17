<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cursophp";

$conn = new mysqli($host, $user, $pass, $db); /* Abri conexão */

//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$q = "SELECT * FROM itens";

$result = $conn->query($q); // Atribuindo o Método Query a uma variável

$conn->close(); /* Encerrou conexão */

// Um resultado
$itens = $result->fetch_assoc();
print_r($itens);

// Todos os resultados
$itens = $result->fetch_all();
print_r($itens);
