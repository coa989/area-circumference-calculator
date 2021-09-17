<?php


namespace classes;


class Rhombus implements Shape
{
    private $side;
    private $diagonal1;
    private $diagonal2;

    public function __construct($side, $diagonal1, $diagonal2)
    {
        $this->side = $side;
        $this->diagonal1 = $diagonal1;
        $this->diagonal2 = $diagonal2;
    }

    public function areaCalculator()
    {
        return ($this->diagonal1 * $this->diagonal2) / 2;
    }

    public function circumferenceCalculator()
    {
        return 4 * $this->side;
    }
}