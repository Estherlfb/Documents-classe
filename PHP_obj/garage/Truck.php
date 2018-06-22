<?php

class Truck
{
    private $color;

    public function getColor(): ?ColorInterface
    {
        return $this->color;
    }

    public function setColor(ColorInterface $color): ColorizableInterface;
    {
        $this->color = $color;
        return $this;
    }
}
