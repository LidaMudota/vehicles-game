<?php
require_once __DIR__ . '/../abstract/Vehicle.php';
require_once __DIR__ . '/../interfaces/VehicleInterface.php';

class Tank extends Vehicle implements VehicleInterface {
    public function __construct()
    {
        $this->setInterior('бронированный');
    }

    public function moveForward() {
        echo "- Движется вперёд<br>";
    }

    public function moveBackward() {
        echo "- Движется назад<br>";
    }

    public function useAbility() {
        echo "- Орудие заряжено<br>";
    }
}