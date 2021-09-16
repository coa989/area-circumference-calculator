<?php

use classes\Circle;
use classes\Rectangle;
use classes\Shape;
use classes\Triangle;

require_once 'autoload.php';

function area(Shape $shape) {
    return $shape->areaCalculator();
}

function circumference(Shape $shape) {
    return $shape->circumferenceCalculator();
}

$rectangle = new Rectangle(10, 15);
$circle = new Circle(5899);
$triangle = new Triangle(89, 155, null);
$triangle1 = new Triangle(89, 155, 151);

echo area($rectangle);
echo "\n";
echo circumference($rectangle);
echo "\n";
echo area($circle);
echo "\n";
echo circumference($circle);
echo "\n";
echo area($triangle);
echo "\n";
echo circumference($triangle);
echo "\n";
echo area($triangle1);
echo "\n";
echo circumference($triangle1);