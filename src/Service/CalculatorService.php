<?php

namespace App\Service;

class CalculatorService
{
    /**
     * Addiert zwei Zahlen
     */
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    /**
     * Subtrahiert zwei Zahlen
     */
    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    /**
     * Multipliziert zwei Zahlen
     */
    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    /**
     * Dividiert zwei Zahlen
     * @throws \InvalidArgumentException wenn $b gleich 0 ist
     */
    public function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException('Division durch Null ist nicht erlaubt');
        }
        return $a / $b;
    }

    /**
     * Berechnet die Potenz einer Zahl
     */
    public function power(float $base, float $exponent): float
    {
        return pow($base, $exponent);
    }

    /**
     * Berechnet den Durchschnitt einer Liste von Zahlen
     */
    public function average(array $numbers): float
    {
        if (empty($numbers)) {
            throw new \InvalidArgumentException('Array darf nicht leer sein');
        }
        return array_sum($numbers) / count($numbers);
    }
}

