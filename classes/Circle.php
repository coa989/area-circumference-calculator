<?php


namespace classes;


class Circle implements Shape
{
    private const PI = 3.141592;
    private int $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function areaCalculator(): int
    {
        return self::PI * ($this->radius * $this->radius);
    }

    public function circumferenceCalculator(): int
    {
        return self::PI * 2 * $this->radius;
    }
}