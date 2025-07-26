<?php
require_once __DIR__ . '/../abstract/Vehicle.php';
require_once __DIR__ . '/../interfaces/VehicleInterface.php';

class Bulldozer extends Vehicle implements VehicleInterface {
    public function __construct()
    {
        $this->setInterior('металлическая кабина');
    }

    public function moveForward() {
        echo "- Едет вперёд<br>";
    }

    public function moveBackward() {
        echo "- Едет назад<br>";
    }

    public function useAbility() {
        echo "- Ковш поднят<br>";
    }
}