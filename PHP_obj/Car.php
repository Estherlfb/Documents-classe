<?php

class Car
{
    const MAX_SPEED = 200; // Les constantes toujours en haut

    private $name;

    // private $color = "yellow"; // propriété couleur (attribut) // Couleur noir par défaut
    private $authColors = ["black", "blue", "red"];

    public function __construct($colore = null) // Elle s'appelle toute seule //$color ici pointe vers l'instance et définie ses modalités

    {
        $this->color = $colore; // $this->color appuie sur private $color
        // $colore appuie sur le paramètre de $car = new Car("")
    }

    // Setter
    public function setColor(string $color): Car// On définie la couleur //Parce que je suis dans la classe Car

    {
        // var_dump($color);die();
        if (in_array($color, $this->authColors)) {
            $this->color = $color;
        }
        return $this;
    }

    public function setName($name): Car//Parce que je suis dans la classe Car

    {
        $this->name = $name;
        return $this;
    }

    public function getColor(): ?string
    {
        if ($this->hasColor()) { // J'appelle la propriété hasColor, même si elle est privée je peux le faire parce que GET
            return $this->color;
        }
        return null;
    }
    // public function __destruct(){
    //     echo 'I am destroyed </br>';
    // }

    public function start()
    {
        echo 'I start';
    }

    public function stop()
    {
        echo 'I stop';
    }

    private function hasColor()
    {
        return $this->color !== null;
    }

}
