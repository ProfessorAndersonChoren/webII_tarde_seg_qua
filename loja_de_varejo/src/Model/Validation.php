<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name): bool
    {
        return mb_strlen($name) > 4;
    }

    public static function validateNumber(float $number): bool
    {
        return $number > 0;
    }
}
