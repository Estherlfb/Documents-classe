<?php

namespace pizzaFactory\Dough;

class SimpleDough
{

    private $name = "Pâte simple";

    public function getName(): string
    {
        return $this->name;
    }

}
