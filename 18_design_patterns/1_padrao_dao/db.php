<?php

// Conexão com o Banco de Dados MySQL

$db = "daotest";
$host = "localhost";
$user = "root";
$pass = "";

$conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
