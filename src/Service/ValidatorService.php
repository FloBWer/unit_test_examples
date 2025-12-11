<?php

namespace App\Service;

class ValidatorService
{
    /**
     * Validiert eine E-Mail-Adresse
     */
    public function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Prüft die Passwortstärke
     * Mindestanforderungen:
     * - Mindestens 8 Zeichen
     * - Mindestens ein Großbuchstabe
     * - Mindestens ein Kleinbuchstabe
     * - Mindestens eine Zahl
     * - Mindestens ein Sonderzeichen
     */
    public function isStrongPassword(string $password): bool
    {
        if (strlen($password) < 8) {
            return false;
        }

        $hasUpperCase = preg_match('/[A-Z]/', $password);
        $hasLowerCase = preg_match('/[a-z]/', $password);
        $hasNumber = preg_match('/[0-9]/', $password);
        $hasSpecialChar = preg_match('/[^A-Za-z0-9]/', $password);

        return $hasUpperCase && $hasLowerCase && $hasNumber && $hasSpecialChar;
    }

    /**
     * Validiert eine Telefonnummer (einfache deutsche Formatprüfung)
     */
    public function isValidPhoneNumber(string $phone): bool
    {
        // Entferne Leerzeichen, Bindestriche und Klammern
        $cleaned = preg_replace('/[\s\-\(\)]/', '', $phone);
        
        // Prüfe auf deutsche Telefonnummer (mit oder ohne +49)
        return preg_match('/^(\+49|0049|0)?[1-9]\d{6,11}$/', $cleaned) === 1;
    }

    /**
     * Prüft ob ein Wert innerhalb eines Bereichs liegt
     */
    public function isInRange(float $value, float $min, float $max): bool
    {
        return $value >= $min && $value <= $max;
    }

    /**
     * Prüft ob ein String nicht leer ist
     */
    public function isNotEmpty(string $value): bool
    {
        return trim($value) !== '';
    }
}

