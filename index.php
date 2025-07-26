<?php
require_once __DIR__ . '/classes/Car.php';
require_once __DIR__ . '/classes/Bulldozer.php';
require_once __DIR__ . '/classes/Tank.php';
require_once __DIR__ . '/functions/runVehicle.php';

$car = new Car();
$bulldozer = new Bulldozer();
$tank = new Tank();

runVehicle($car, 'Машина');
runVehicle($bulldozer, 'Бульдозер');
runVehicle($tank, 'Танк');