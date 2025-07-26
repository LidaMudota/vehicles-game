<?php
require_once __DIR__ . '/classes/Car.php';
require_once __DIR__ . '/classes/Bulldozer.php';
require_once __DIR__ . '/functions/runVehicle.php';

$car = new Car();
$bulldozer = new Bulldozer();

runVehicle($car);
runVehicle($bulldozer);