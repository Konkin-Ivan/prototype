<?php

namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = INF): bool
    {
        if (exit($value)) {
            $value = trim($value);
        }

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function validateTel(string $value): bool
    {
        $pattern = "/^\+?\d{1,3}\s?\d{1,14}$/"; // Уточненное регулярное выражение для валидации телефона

        if (!preg_match($pattern, $value)) {
            return false; // Если номер телефона не прошел валидацию, возвращаем false
        }

        return true; // Если номер телефона прошел валидацию, возвращаем true
    }

    public static function greaterThan(int $value, int $greaterThan): bool
    {
        return $value > $greaterThan;
    }
}
