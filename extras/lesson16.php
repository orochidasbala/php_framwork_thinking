<?php

class Car {
    public static function startEngine() {
        echo "Engine starting. ";
        return new Car;
    }
    public function drive() {
        echo "Drive the car.";
    }
    public function stop() {
        echo "Stop the car";
    }
}

$lambo = new Car;
$lambo->startEngine();

Car::startEngine()->drive();