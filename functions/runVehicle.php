<?php
require_once __DIR__ . '/../interfaces/VehicleInterface.php';

function runVehicle(VehicleInterface $vehicle) {
    $vehicle->moveForward();
    $vehicle->useAbility();
}