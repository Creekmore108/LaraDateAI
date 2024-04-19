<?php

namespace App\Helpers;

use Carbon\Carbon;

class CalcAge
{
    public static function calculateAge($birthDate)
    {
        $birthDate = Carbon::parse($birthDate);
        $age = Carbon::now()->diffInYears($birthDate);

        return $age;
    }

}
