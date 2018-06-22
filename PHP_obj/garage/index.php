<?php

include "Colors/ColorInterface.php";
include "Colors/Green.php";
include "Colors/Black.php";
include "Colors/Red.php";
include "Colors/ColorStock.php";
include "Garage.php";
include "Moto.php";
include "Truck.php";
include "Car.php";

$color = new ColorStock();
$color->addColor(new Black());
$color->addColor(new Red());
$color->addColor(new Green());

$garage = new Garage($color);

$moto = new Truck();
$moto->setColor(new Green());
var_dump($moto);

$garage = new Garage($colorStock);
$garage->paint($moto, new Red());
var_dump($moto);
