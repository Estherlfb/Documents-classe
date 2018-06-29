<?php

namespace garage\Colors;

class Green implements ColorInterface
{

    private $name = "Green";
    private $hexaCode = "#00FF00";

    public function getName(): string
    {
        return $this->name;
    }

    public function getHexaCode(): string
    {
        return $this->hexaCode;
    }
}
