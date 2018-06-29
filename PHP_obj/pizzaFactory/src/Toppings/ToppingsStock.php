<?php

namespace pizzaFactory\Toppings;

use pizzaFactory\Exception\CheeseAlreadyExistException;
use pizzaFactory\Exception\MeatAlreadyExistException;
use pizzaFactory\Exception\VegetableAlreadyExistException;
use pizzaFactory\Toppings\Vegetable\VegetableInterface;

class ToppingsStock
{
    private $toppings = [];

    public function addCheese($topping): ToppingsStock
    {
        if (!in_array($topping, $this->toppings)) {
            $this->toppings[] = $topping;
        } else {
            throw new CheeseAlreadyExistException("Cheese already exist");
        }
        return $this;
    }

    public function addVegetable(VegetableInterface $topping): ToppingsStock
    {
        if (!in_array($topping, $this->toppings)) {
            $this->toppings[] = $topping;
        } else {
            throw new VegetableAlreadyExistException("Vegetable already exist");
        }
        return $this;
    }

    public function addMeat($topping): ToppingsStock
    {
        if (!in_array($topping, $this->toppings)) {
            $this->toppings[] = $topping;
        } else {
            throw new MeatAlreadyExistException("Meat already exist");
        }
        return $this;
    }
}
