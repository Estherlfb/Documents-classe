<?php
declare (strict_types = 1); // Typage forcé

include "Engine.php";
include "Car.php";

$engine = new Engine();
echo $engine->turnOn();
echo $engine->turnOff();

$car = new Car("green"); // On instancie l'objet Car qui s'appelle $car ($car est mon instance)
// var_dump($car); // Affiche la couleur noir par défaut
$car->color = "kk"; // On assigne la couleur red si la propriété est public
// var_dump($car); // Affiche la couleur rouge
echo $car->color; // Afffiche la couleur si la propriété est public

// var_dump($car);
// var_dump($car instanceof Car); // Vérifier que $car est une instance de la class car -> renvoie un booléan
// var_dump(get_class($car)); // Vérifier de quelle classe est la variable $car

echo "</br>";
$car->start(); // Affiche la fonction start();
echo "</br>";
$car->stop(); // Affiche la fonction stop();

echo "</br>";
// var_dump(Car::MAX_SPEED); // Affiche int(200)
// echo Car::MAX_SPEED; // Affiche 200

$car->setColor((string) 42); // Je convertis l'int en string

$car->setColor("yellow"); // Accéder à la méthode setColor
var_dump($car);
$car->setColor("red");
var_dump($car);

$car2 = new Car();
$car2->setColor("red")->setName("Pigeot");
var_dump($car2);
