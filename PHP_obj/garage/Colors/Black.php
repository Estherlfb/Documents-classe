<?php

class Black implements ColorInterface
{

    private $name = "Black";
    private $hexaCode = "#000000";

    public function getName(): string
    {
        return $this->name;
    }

    public function getHexaCode(): string
    {
        return $this->hexaCode;
    }

}
