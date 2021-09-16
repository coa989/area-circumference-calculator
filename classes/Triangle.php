<?php


namespace classes;


class Triangle implements Shape
{
    private int $base;
    private int $height;
    private ?int $side;

    public function __construct($base, $height, $side)
    {
        $this->base = $base;
        $this->height = $height;
        $this->side = $side;
    }

    public function areaCalculator(): float
    {
        return ($this->base * $this->height) / 2;
    }

    public function circumferenceCalculator(): int
    {
        return $this->base + $this->height + $this->side;
    }
}