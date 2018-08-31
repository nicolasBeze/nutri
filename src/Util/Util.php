<?php

namespace App\Util;

class Util
{
    public static function getNutrientBase() : array
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

    public static Function getUnitNutrient() : array
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