<?php

include "vendor/autoload.php";

use garage\Car;
use garage\Colors\ColorStock;
use garage\Colors\Green;
use garage\Colors\Red;
use garage\Exception\ColorAlreadyExistException;
use garage\Garage;

try {
    $colorStock = new ColorStock();
    $colorStock->addColor(new Red());
    $colorStock->addColor(new Green());
    dump($colorStock);
    $garage = new Garage($colorStock);
    $car = new Car();
    $garage->paint($car, "Green");
    dump($car);

} catch (ColorAlreadyExistException $e) {
    echo $e->getMessage();
}
