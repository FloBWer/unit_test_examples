<?php

namespace App\Service;

class ArrayProcessorService
{
    /**
     * Findet das Maximum in einem Array
     */
    public function findMax(array $numbers): ?float
    {
        if (empty($numbers)) {
            return null;
        }
        return max($numbers);
    }

    /**
     * Findet das Minimum in einem Array
     */
    public function findMin(array $numbers): ?float
    {
        if (empty($numbers)) {
            return null;
        }
        return min($numbers);
    }

    /**
     * Sortiert ein Array aufsteigend
     */
    public function sortAscending(array $numbers): array
    {
        $sorted = $numbers;
        sort($sorted);
        return $sorted;
    }

    /**
     * Sortiert ein Array absteigend
     */
    public function sortDescending(array $numbers): array
    {
        $sorted = $numbers;
        rsort($sorted);
        return $sorted;
    }

    /**
     * Entfernt Duplikate aus einem Array
     */
    public function removeDuplicates(array $items): array
    {
        return array_values(array_unique($items));
    }

    /**
     * Zählt die Häufigkeit jedes Elements in einem Array
     */
    public function countOccurrences(array $items): array
    {
        return array_count_values($items);
    }

    /**
     * Kombiniert zwei Arrays
     */
    public function merge(array $array1, array $array2): array
    {
        return array_merge($array1, $array2);
    }

    /**
     * Findet gemeinsame Elemente in zwei Arrays
     */
    public function findCommon(array $array1, array $array2): array
    {
        return array_values(array_intersect($array1, $array2));
    }

    /**
     * Berechnet die Summe aller Zahlen in einem Array
     */
    public function sum(array $numbers): float
    {
        return array_sum($numbers);
    }
}

