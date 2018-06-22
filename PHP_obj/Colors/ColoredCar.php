<?php

class ColoredCar
{
    private $colorsList = [];

    public function __construct()
    {
        $this->colorList[] = new Red();
        $this->colorList[] = new Green();
        $this->colorList[] = new Black();

        public function getColorInfo($index) : ?string{
            if(isset($this->colorList[$index])){
                $color = $this->colorList[$index];
                return $color->getHexaCode;
            }else{
                return null;
            }
        }
    }
}
