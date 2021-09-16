<?php

use classes\Circle;
use classes\Rectangle;
use classes\Triangle;

require_once 'autoload.php';

//$rectangle = new Rectangle(10, 15);
//var_dump($rectangle->areaCalculator(), $rectangle->circumferenceCalculator());

//$circle = new Circle(5899);
//var_dump($circle->areaCalculator(), $circle->circumferenceCalculator());

$triangle = new Triangle(89, 155, null);
$triangle2 = new Triangle(89, 155, 151);
var_dump($triangle->areaCalculator(), $triangle->circumferenceCalculator());
var_dump($triangle2->areaCalculator(), $triangle2->circumferenceCalculator());