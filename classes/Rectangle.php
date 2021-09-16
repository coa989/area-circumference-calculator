<?php


namespace classes;


class Rectangle implements Shape
{
    private int $length;
    private int $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function areaCalculator(): int
    {
        return $this->length * $this->width;
    }

    public function circumferenceCalculator(): int
    {
        return 2 * ($this->length + $this->width);
    }
}