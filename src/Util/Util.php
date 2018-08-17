<?php

namespace App\Util;

class Util
{
    public static function getNutrientBase()
    {
        return [
            'proteines',
            'lipides',
            'glucides',
            'energie',
            'vitamines',
            'mineraux',
            'autres',
        ];
    }

    public static Function getUnitNutrient()
    {
        return [
            'g',
            'mg',
            'µg',
            'kJ',
            'kCal',
        ];
    }
}