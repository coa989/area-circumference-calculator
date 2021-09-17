<?php


namespace classes;


class Hexagon implements Shape
{
    private int $side;

    public function __construct($side)
    {
        $this->side = $side;
    }


    public function areaCalculator()
    {
        return round((3 * sqrt(3) * ($this->side * $this->side)) / 2, 2);
    }

    public function circumferenceCalculator()
    {
        return 6 * $this->side;
    }
}