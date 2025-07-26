<?php
require_once __DIR__ . '/../abstract/Vehicle.php';
require_once __DIR__ . '/../interfaces/VehicleInterface.php';

class Car extends Vehicle implements VehicleInterface {
    public function moveForward() {
        echo "Машина едет вперёд" . PHP_EOL;
    }

    public function moveBackward() {
        echo "Машина едет назад" . PHP_EOL;
    }

    public function useAbility() {
        echo "Включена закись азота" . PHP_EOL;
    }
}