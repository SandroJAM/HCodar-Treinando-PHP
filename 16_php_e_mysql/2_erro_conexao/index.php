<?php

/* $conn = new mysqli("localhost", "root", "", "cursophp"); */

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo "Erro na conexão com o banco! <br>";
    echo "Erro: " . mysqli_connect_error();
    echo "Erro: " . $conn->connect_error; /* Exibir o erro Orientado a Objeto */
}
