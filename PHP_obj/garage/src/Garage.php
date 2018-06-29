<?php

namespace garage;

use garage\Colors\ColorInterface;
use garage\Colors\ColorStock;
use garage\Exception\ColorNotAvailableException;
use garage\Exception\VehicleNotAllowedException;

class Garage
{

    private $ColorStock;

    public function __construct(ColorStock $colorStock)
    {
        $this->ColorStock = $colorStock;
    }

    public function paint(VehicleInterface $vehicule, string $colorName)
    {
        if ($vehicule instanceof ColorizableInterface) {
            $color = $this->ColorStock->searchColorByName($colorName);
            if ($color !== null) {
                $vehicule->setColor($color);
            } else {
                throw new ColorNotAvailableException("Color not available");
            }
        } else {
            throw new VehicleNotAllowedException("Vehicule not allowed (not colorizable)");
        }
    }

    public function buyColor(ColorInterface $color): Garage// Parce qu'on retourne $this de la classe Garage

    {
        $this->ColorStock->addColor($color);
        return $this;
    }

    public function removeColor()
    {
        $this->ColorStock->removeColor($color);
    }

}
