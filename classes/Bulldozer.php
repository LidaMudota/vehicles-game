<?php
require_once __DIR__ . '/../abstract/Vehicle.php';
require_once __DIR__ . '/../interfaces/VehicleInterface.php';

class Bulldozer extends Vehicle implements VehicleInterface {
    public function moveForward() {
        echo "Бульдозер едет вперёд" . PHP_EOL;
    }

    public function moveBackward() {
        echo "Бульдозер едет назад" . PHP_EOL;
    }

    public function useAbility() {
        echo "Ковш поднят" . PHP_EOL;
    }
}