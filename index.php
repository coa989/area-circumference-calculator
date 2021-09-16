<?php

use classes\Circle;
use classes\Rectangle;
use classes\Triangle;

require_once 'autoload.php';

$rectangle = new Rectangle(10, 15);
$circle = new Circle(5899);
$triangle = new Triangle(89, 155, null);
$triangle1 = new Triangle(89, 155, 151);
?>

<p>Rectangle Area:
    <?= $rectangle->areaCalculator() ?>
</p>
<p>Rectangle Circumference:
    <?= $rectangle->circumferenceCalculator() ?>
</p>
<p>Circle Area:
    <?= $circle->areaCalculator() ?>
</p>
<p>Circle Circumference:
    <?= $circle->circumferenceCalculator() ?>
</p>
<p>Triangle Area:
    <?= $triangle->areaCalculator() ?>
</p>
<p>Triangle Circumference:
    <?= $triangle->circumferenceCalculator() ?>
</p>
<p>Triangle 1 Area:
    <?= $triangle1->areaCalculator() ?>
</p>
<p>Triangle 1 Circumference:
    <?= $triangle1->circumferenceCalculator() ?>
</p>