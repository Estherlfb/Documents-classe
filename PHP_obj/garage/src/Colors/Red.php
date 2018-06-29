<?php

namespace garage\Colors;

class Red implements ColorInterface
{

    private $name = "Rouge";
    private $hexaCode = "#FF0000";

    public function getName(): string
    {
        return $this->name;
    }

    public function getHexaCode(): string
    {
        return $this->hexaCode;
    }
}
