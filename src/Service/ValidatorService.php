<?php

namespace App\Service;

class ValidatorService
{
    public function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

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

    public function isValidPhoneNumber(string $phone): bool
    {
        $cleaned = preg_replace('/[\s\-\(\)]/', '', $phone);
        return preg_match('/^(\+49|0049|0)?[1-9]\d{6,11}$/', $cleaned) === 1;
    }

    public function isInRange(float $value, float $min, float $max): bool
    {
        return $value >= $min && $value <= $max;
    }

    public function isNotEmpty(string $value): bool
    {
        return trim($value) !== '';
    }
}

