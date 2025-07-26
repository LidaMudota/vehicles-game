<?php
abstract class Vehicle {
    public function honk() {
        echo "Сигнал!" . PHP_EOL;
    }
    public function wipersOn() {
        echo "Дворники включены" . PHP_EOL;
    }
    public function showInterior() {
        echo "Простой интерьер" . PHP_EOL;
    }
}