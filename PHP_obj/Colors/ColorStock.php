<?php

class ColorStock
{
    private $colors = [];

    public function addColor(ColorInterface $color): ColorStock
    {
        if (!in_array($color, $this->colors)) { // Mon paramètre, mon tableau
            $this->colors[] = $color; // J'ajoute au tableau
        }
        return $this;
    }

    public function removeColor($color)
    {
        if (in_array($color, $this->colors)) {
            $key = array_search($color, $this->colors);
            unset($this->colors[$key]);
        }
        return $this;
    }

    public function getColorsCount(): int
    {
        return count($this->colors);
    }

    public function getColor(string $color): ?ColorInterface
    {
        foreach ($this->colors as $value) {
            if (get_class($value) == $color) {
                return $value;
            }
        }
    }

    public function searchColorByName($name): ?ColorInterface
    {
        foreach ($this->colors as $value) {
            if (strtolower($value->getName()) == strtolower($name)) {
            }
            return $value;
        }return false;
    }

    public function searchColorByHexaCode($hexaCode): ?ColorInterface
    {
        foreach ($this->colors as $value) {
            if (strtolower($value->getHexaCode()) == strtolower($hexaCode)) {
                return $value;
            }
        }return false;
    }

    public function checkColorObject($color)
    {
        return method_exists($color, "getName")
        && method_exists($color, "getHexaCode");
    }
}
