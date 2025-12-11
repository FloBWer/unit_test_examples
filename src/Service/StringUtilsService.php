<?php

namespace App\Service;

class StringUtilsService
{
    public function isPalindrome(string $text): bool
    {
        $cleaned = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $text));
        return $cleaned === strrev($cleaned);
    }

    public function reverse(string $text): string
    {
        return strrev($text);
    }

    public function countWords(string $text): int
    {
        $words = preg_split('/\s+/', trim($text));
        return count(array_filter($words, fn($word) => !empty($word)));
    }

    public function toUpperCase(string $text): string
    {
        return strtoupper($text);
    }

    public function toLowerCase(string $text): string
    {
        return strtolower($text);
    }

    public function removeSpaces(string $text): string
    {
        return str_replace(' ', '', $text);
    }

    public function startsWith(string $text, string $prefix): bool
    {
        return str_starts_with($text, $prefix);
    }

    public function endsWith(string $text, string $suffix): bool
    {
        return str_ends_with($text, $suffix);
    }
}

