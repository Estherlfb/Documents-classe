<?php

namespace garage;

use garage\Colors\ColorInterface;

// ColorInterface pas même espace de nom que ColorizableInterface et VehicleInterface

class Moto implements ColorizableInterface, VehicleInterface// Même espace de nom donc pas besoin de les charger

{
    private $color;

    public function getColor(): ?ColorInterface
    {
        return $this->color;
    }

    public function setColor(ColorInterface $color): ColorizableInterface
    {
        $this->color = $color;
        return $this;
    }
}
