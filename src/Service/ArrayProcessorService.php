<?php

namespace App\Service;

class ArrayProcessorService
{
    public function findMax(array $numbers): ?float
    {
        if (empty($numbers)) {
            return null;
        }
        return max(value: $numbers);
    }

    public function findMin(array $numbers): ?float
    {
        if (empty($numbers)) {
            return null;
        }
        return min($numbers);
    }

    public function sortAscending(array $numbers): array
    {
        $sorted = $numbers;
        sort($sorted);
        return $sorted;
    }

    public function sortDescending(array $numbers): array
    {
        $sorted = $numbers;
        rsort($sorted);
        return $sorted;
    }

    public function removeDuplicates(array $items): array
    {
        return array_values(array_unique($items));
    }

    public function countOccurrences(array $items): array
    {
        return array_count_values($items);
    }

    public function merge(array $array1, array $array2): array
    {
        return array_merge($array1, $array2);
    }

    public function findCommon(array $array1, array $array2): array
    {
        return array_values(array_intersect($array1, $array2));
    }

    public function sum(array $numbers): float
    {
        return array_sum($numbers);
    }
}

