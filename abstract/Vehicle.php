<?php
require_once __DIR__ . '/../interfaces/VehicleInterface.php';

abstract class Vehicle implements VehicleInterface {
    protected string $interior = 'Простой интерьер';

    public function setInterior(string $interior): void {
        $this->interior = $interior;
    }

    public function honk(): void {
        echo '- Сигнал!<br>';
    }

    public function wipersOn(): void {
        echo '- Дворники включены<br>';
    }

    public function showInterior(): void {
        echo '- Интерьер: ' . $this->interior . '<br>';
    }

    abstract public function moveForward();
    abstract public function moveBackward();
    abstract public function useAbility();
}