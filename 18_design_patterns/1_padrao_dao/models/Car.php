<?php

// Primeira parte do DAO 

class Car
{

    // Criar propriedades correspondentes a nossas colunas de tabelas

    private $id;
    private $brand;
    private $km;
    private $color;

    // Criar os métodos a nível de objetos

    public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id = $id;
    }
    public function getbrand()
    {
        return $this->brand;
    }

    public function setbrand($brand)
    {
        $this->brand = $brand;
    }
    public function getkm()
    {
        return $this->km;
    }

    public function setkm($km)
    {
        $this->km = intval($km);
    }
    public function getcolor()
    {
        return $this->color;
    }

    public function setcolor($color)
    {
        $this->color = $color;
    }
}

// Parte opcional (Interface)

interface CarDAOInterface
{

    public function create(Car $car);
    public function findAll();
}
