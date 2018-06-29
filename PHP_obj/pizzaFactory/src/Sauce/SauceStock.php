<?php

namespace pizzaFactory\Sauce;

use pizzaFactory\Exception\SauceAlreadyExistException;

class SauceStock
{
    private $sauces = [];

    public function addSauce($sauce): SauceStock
    {
        if (!in_array($sauce, $this->sauces)) {
            $this->sauces[] = $sauce;
        } else {
            throw new SauceAlreadyExistException("Sauce already exist");
        }
        return $this;
    }

}
