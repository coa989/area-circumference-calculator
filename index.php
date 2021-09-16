<?php

use classes\Rectangle;

require_once 'autoload.php';

$rectangle = new Rectangle(10, 15);
var_dump($rectangle->areaCalculator(), $rectangle->circumferenceCalculator());