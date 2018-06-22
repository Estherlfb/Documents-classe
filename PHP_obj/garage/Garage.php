<?php

class Garage
{

    private $ColorStock;

    public function __construct(ColorStock $colorStock)
    {
        $this->ColorStock = $colorStock;
    }

    public function paint(ColorizableInterface $vehicule, string $colorName)
    {
        $color = $this->colorStock->searchColorByName($colorName);
        if ($color !== null) {
            $vehicule->setColor($color);
        }
    }

}
