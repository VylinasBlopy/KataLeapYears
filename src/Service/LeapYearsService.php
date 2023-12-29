<?php

namespace App\Service;

class LeapYearsService
{
    public static function isLeapYear(int $year): bool
    {
        return $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
    }
}