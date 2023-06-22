<?php

include_once('models/Car.php');

class CarDAO implements CarDAOInterface{
    private $conn;

    public function __construct(PDO $conn){
        $this->conn = $conn;
    }

    public function create(Car $car){
        $stmt = $this->conn->prepare("INSERT INTO cars(brand,km,color) VALUES (:brand,:km,:color)");
        $stmt->bindParam(":brand",$car->getBrand());
        $stmt->bindParam(":km",$car->getKm());
        $stmt->bindParam(":color",$car->getColor());
        $stmt->execute();
    }
    public function findAll(){

        $cars = [];
        
        $stmt = $this->conn->query("SELECT * FROM cars");
        
        $data = $stmt->fetchAll();

        foreach($data as $car){
            $carr = new Car();
            $carr->setId($car["id"]);
            $carr->setBrand($car["brand"]);
            $carr->setKm($car["km"]);
            $carr->setColor($car["color"]);

            $cars[] = $carr;
        }
        return $cars;
    }
}