<?php

namespace garage;

use garage\Colors\ColorInterface;

class Car implements ColorizableInterface, VehicleInterface
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
