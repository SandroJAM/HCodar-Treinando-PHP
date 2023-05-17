<?php

// Conexão para a Classe

include_once("db.php");
include_once("dao/CarDAOMySQL.php");

$carDao = new CarDAO($conn); // Passar conexão

$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];

$newCar = new Car();

$newCar->SetBrand($brand);
$newCar->SetKm($km);
$newCar->SetColor($color);

$carDao->create($newCar);

header("Location: index.php"); // Lógica implementada lá no CarDao
