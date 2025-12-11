<?php

namespace App\Service;

class NumberUtilsService
{
    /**
     * Prüft ob eine Zahl gerade ist
     */
    public function isEven(int $number): bool
    {
        return $number % 2 === 0;
    }

    /**
     * Prüft ob eine Zahl ungerade ist
     */
    public function isOdd(int $number): bool
    {
        return $number % 2 !== 0;
    }

    /**
     * Prüft ob eine Zahl eine Primzahl ist
     */
    public function isPrime(int $number): bool
    {
        if ($number < 2) {
            return false;
        }

        if ($number === 2) {
            return true;
        }

        if ($number % 2 === 0) {
            return false;
        }

        for ($i = 3; $i <= sqrt($number); $i += 2) {
            if ($number % $i === 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * Berechnet die Fakultät einer Zahl
     * @throws \InvalidArgumentException wenn $number negativ ist
     */
    public function factorial(int $number): int
    {
        if ($number < 0) {
            throw new \InvalidArgumentException('Fakultät ist nur für nicht-negative Zahlen definiert');
        }

        if ($number === 0 || $number === 1) {
            return 1;
        }

        $result = 1;
        for ($i = 2; $i <= $number; $i++) {
            $result *= $i;
        }

        return $result;
    }

    /**
     * Berechnet die Fibonacci-Zahl an Position n
     */
    public function fibonacci(int $n): int
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Fibonacci ist nur für nicht-negative Zahlen definiert');
        }

        if ($n === 0) {
            return 0;
        }

        if ($n === 1) {
            return 1;
        }

        $a = 0;
        $b = 1;

        for ($i = 2; $i <= $n; $i++) {
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }

        return $b;
    }

    /**
     * Rundet eine Zahl auf die nächste ganze Zahl
     */
    public function round(float $number): int
    {
        return (int) round($number);
    }

    /**
     * Berechnet den absoluten Wert einer Zahl
     */
    public function absolute(float $number): float
    {
        return abs($number);
    }
}

