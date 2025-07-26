<?php
abstract class Vehicle {
    protected string $interior = 'Простой интерьер';

    public function setInterior(string $interior): void {
        $this->interior = $interior;
    }

    public function honk(): void {
    echo "Сигнал!" . PHP_EOL;
    }

    public function wipersOn(): void {
    echo "Дворники включены" . PHP_EOL;
    }
    public function showInterior(): void {
        echo 'Интерьер: ' . $this->interior . PHP_EOL;
    }
}