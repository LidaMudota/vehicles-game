<?php
require_once __DIR__ . '/../abstract/Vehicle.php';
require_once __DIR__ . '/../interfaces/VehicleInterface.php';

class Tank extends Vehicle implements VehicleInterface {
    public function __construct()
    {
        $this->setInterior('бронированный интерьер');
    }

    public function moveForward() {
        echo "Танк движется вперёд" . PHP_EOL;
    }

    public function moveBackward() {
        echo "Танк движется назад" . PHP_EOL;
    }

    public function useAbility() {
        echo "Орудие заряжено" . PHP_EOL;
    }
}