<?php

// Classe de DAO será chamada pelo index

include_once("models/Car.php");

class CarDAO implements CarDAOInterface
{

    private $conn; // Receber a conexão

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function findAll()
    {

        $cars = [];

        $stmt = $this->conn->query("SELECT * FROM cars");

        $data = $stmt->fetchAll();

        foreach ($data as $item) { // Criar Objeto (back-end)
            $car = new Car();
            $car->setId($item["id"]);
            $car->setBrand($item["brand"]);
            $car->setKm($item["km"]);
            $car->setColor($item["color"]);

            $cars[] = $car;
        }

        return $cars;
    }

    public function create(Car $car)
    {
        $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)"); // Query de inserção

        $stmt->bindParam(":brand", $car->getbrand());
        $stmt->bindParam(":km", $car->getkm());
        $stmt->bindParam(":color", $car->getcolor());

        $stmt->execute();
    }
}
