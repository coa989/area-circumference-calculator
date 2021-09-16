<?php

use classes\Circle;
use classes\Rectangle;

require_once 'autoload.php';

//$rectangle = new Rectangle(10, 15);
//var_dump($rectangle->areaCalculator(), $rectangle->circumferenceCalculator());

$circle = new Circle(5899);
var_dump($circle->areaCalculator(), $circle->circumferenceCalculator());