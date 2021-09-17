<?php

use classes\Calculator;
use classes\Circle;
use classes\Hexagon;
use classes\Rectangle;
use classes\Rhombus;
use classes\Triangle;

require_once 'autoload.php';

$rectangle = new Rectangle(10, 15);
$circle = new Circle(5899);
$triangle = new Triangle(89, 155, null);
$triangle1 = new Triangle(89, 155, 151);
$hexagon = new Hexagon(10);
$rhombus = new Rhombus(10,7, 15);


echo Calculator::area($rectangle);
echo "\n";
echo Calculator::circumference($rectangle);
echo "\n";
echo Calculator::area($circle);
echo "\n";
echo Calculator::circumference($circle);
echo "\n";
echo Calculator::area($triangle);
echo "\n";
echo Calculator::circumference($triangle);
echo "\n";
echo Calculator::area($triangle1);
echo "\n";
echo Calculator::circumference($triangle1);
echo "\n";
echo Calculator::area($hexagon);
echo "\n";
echo Calculator::circumference($hexagon);
echo "\n";
echo Calculator::area($rhombus);
echo "\n";
echo Calculator::circumference($rhombus);
echo "\n";