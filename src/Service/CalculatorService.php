<?php

namespace App\Service;

class CalculatorService
{
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException('Division durch Null ist nicht erlaubt');
        }
        return $a / $b;
    }

    public function power(float $base, float $exponent): float
    {
        return pow($base, $exponent);
    }

    public function average(array $numbers): float
    {
        if (empty($numbers)) {
            throw new \InvalidArgumentException('Array darf nicht leer sein');
        }
        return array_sum($numbers) / count($numbers);
    }
}

