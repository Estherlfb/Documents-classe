<?php

class Car
{
    const MAX_SPEED = 200; // Les constantes toujours en haut

    // private $color = "yellow"; // propriété couleur (attribut) // Couleur noir par défaut
    private $authColors = ["black", "blue", "red"];

    public function __construct($colore) // Elle s'appelle toute seule //$color ici pointe vers l'instance

    {
        $this->color = $colore; // $this->color appuie sur private $color
        // $colore appuie sur le paramètre de $car = new Car("")
    }

    // Setter
    public function setColor($color)
    {
        if (in_array($color, $this->authColors)) {
            $this->color = $color;
        }
    }

    public function getColor()
    {
        if ($this->hasColor()) { // J'appelle la propriété hasColor, même si elle est privée je peux le faire
            return $this->color;
        }
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
