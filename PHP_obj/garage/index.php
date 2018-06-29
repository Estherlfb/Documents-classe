<?php

include "Exception/ColorAlreadyExistException.php";
include "Exception/ColorNotAvailableException.php";
include "Exception/VehicleNotAllowedException.php";
include "Colors/ColorInterface.php";
include "VehicleInterface.php";
include "ColorizableInterface.php";
include "Colors/Green.php";
include "Colors/Black.php";
include "Colors/Red.php";
include "Colors/ColorStock.php";
include "Garage.php";
include "Moto.php";
include "Truck.php";
include "Car.php";

try {
    $color = new ColorStock();
    $color->addColor(new Black());
    $color->addColor(new Black());
    $color->addColor(new Red());
    $color->addColor(new Green());
} catch (ColorAlreadyExistException $e) {
    echo '</br>';
    echo 'Une erreur sur la couleur : ' . $e->getMessage();
}

$garage = new Garage($color);

$moto = new Moto();
$moto->setColor(new Green());
var_dump($moto);

$garage = new Garage($color);

try { // Message personnalisé
    $garage->paint($moto, "red");
    var_dump($moto);

    $truck = new Truck();
    $garage->paint($truck, "green");
    // Le code ci-dessous n'est pas exécuté dans le try
    $garage->paint($truck, "pink");

    var_dump($truck);
} catch (VehicleNotAllowedException $e) { // Il vient directement dans le catch
    echo '</br>';
    echo 'ERREUR :' . $e->getMessage();
} catch (ColorNotAvailableException $e) {
    echo '</br>';
    echo 'Une erreur s\'est produite :' . $e->getMessage();
} finally { // Ce morceau est exécuté
    echo '<br/> Fin du programme';
}
