<?php
require_once __DIR__ . '/../abstract/Vehicle.php';

function runVehicle(Vehicle $vehicle, string $name): void {
    echo "<strong>{$name}</strong><br>";
    $vehicle->moveForward();
    $vehicle->useAbility();

    if (method_exists($vehicle, 'honk')) {
        $vehicle->honk();
    }

    if (method_exists($vehicle, 'wipersOn')) {
        $vehicle->wipersOn();
    }

    if (method_exists($vehicle, 'showInterior')) {
        $vehicle->showInterior();
    }

    echo "<br>";
}