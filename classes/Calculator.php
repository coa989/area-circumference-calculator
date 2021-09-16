<?php


namespace classes;


class Calculator
{
    public static function area(Shape $shape)
    {
        return $shape->areaCalculator();
    }

    public static function circumference(Shape $shape)
    {
        return $shape->circumferenceCalculator();
    }
}