<?php

namespace pizzaFactory;

use pizzaFactory\Dough\DoughStock;
use pizzaFactory\Sauce\SauceStock;
use pizzaFactory\Size;
use pizzaFactory\Toppings\ToppingsStock;

class Pizza
{

    private $toppingsStock;
    private $sauceStock;
    private $doughStock;
    private $size;
    private $name;

    public function __construct(string $name, ToppingsStock $toppingsStock, SauceStock $sauceStock, DoughStock $doughStock, int $size)
    {
        $this->toppingsStock = $toppingsStock;
        $this->sauceStock = $sauceStock;
        $this->doughStock = $doughStock;
        $this->size = $size;
        $this->name = $name;
    }

}
