<?php

namespace App\Service;

class StringUtilsService
{
    /**
     * Prüft ob ein String ein Palindrome ist
     */
    public function isPalindrome(string $text): bool
    {
        $cleaned = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $text));
        return $cleaned === strrev($cleaned);
    }

    /**
     * Kehrt einen String um
     */
    public function reverse(string $text): string
    {
        return strrev($text);
    }

    /**
     * Zählt die Anzahl der Wörter in einem String
     */
    public function countWords(string $text): int
    {
        $words = preg_split('/\s+/', trim($text));
        return count(array_filter($words, fn($word) => !empty($word)));
    }

    /**
     * Konvertiert einen String zu Großbuchstaben
     */
    public function toUpperCase(string $text): string
    {
        return strtoupper($text);
    }

    /**
     * Konvertiert einen String zu Kleinbuchstaben
     */
    public function toLowerCase(string $text): string
    {
        return strtolower($text);
    }

    /**
     * Entfernt alle Leerzeichen aus einem String
     */
    public function removeSpaces(string $text): string
    {
        return str_replace(' ', '', $text);
    }

    /**
     * Prüft ob ein String mit einem bestimmten Präfix beginnt
     */
    public function startsWith(string $text, string $prefix): bool
    {
        return str_starts_with($text, $prefix);
    }

    /**
     * Prüft ob ein String mit einem bestimmten Suffix endet
     */
    public function endsWith(string $text, string $suffix): bool
    {
        return str_ends_with($text, $suffix);
    }
}

