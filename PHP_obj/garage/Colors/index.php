<?php

include "ColorInterface.php";
include "Black.php";
include "Green.php";
include "Red.php";
include "ColorStock.php";

$color = new ColorStock();

$color->addColor(new Red());
$color->addColor(new Red());
$color->addColor(new Green());
var_dump($color);

// $red = new Red();
// $red2 = new Red();
// var_dump($red == $red2); // true
// var_dump($red === $red2); // false

$color->removeColor(new Green());
var_dump($color);

var_dump($color->getColor(Green::class));

var_dump($color->searchColorByName("Green"));
var_dump($color->searcheColorByHexaCode("#00FF00"));
