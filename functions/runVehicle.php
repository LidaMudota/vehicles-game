<?php
require_once __DIR__ . '/../interfaces/VehicleInterface.php';

function runVehicle(VehicleInterface $vehicle) {
    $vehicle->moveForward();
    echo PHP_EOL;

    $vehicle->useAbility();
    echo PHP_EOL;

    if (method_exists($vehicle, 'honk')) {
        $vehicle->honk();
    }

    if (method_exists($vehicle, 'wipersOn')) {
        $vehicle->wipersOn();
    }

    if (method_exists($vehicle, 'showInterior')) {
        $vehicle->showInterior();
    }

    echo PHP_EOL;
}