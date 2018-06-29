<?php

namespace pizzaFactory\Dough;

use pizzaFactory\Exception\DoughAlreadyExistException;

class DoughStock
{
    private $doughs = [];

    public function addDough($dough): DoughStock
    {
        if (!in_array($dough, $this->doughs)) {
            $this->doughs[] = $dough;
        } else {
            throw new DoughAlreadyExistException("Dough already exist");
        }
        return $this;
    }
}
