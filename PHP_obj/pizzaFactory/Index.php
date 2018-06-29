<?php

include "vendor/autoload.php";
use pizzaFactory\Dough\DoughInterface;
// use pizzaFactory\Exception\SauceAlreadyExistException;
// use pizzaFactory\Exception\DoughAlreadyExistException;
// use pizzaFactory\Exception\MeatAlreadyExistException;
// use pizzaFactory\Exception\CheeseAlreadyExistException;
// use pizzaFactory\Exception\VegetableAlreadyExistException;
use pizzaFactory\Dough\DoughStock;
use pizzaFactory\Dough\SimpleDough;
use pizzaFactory\Pizza;
use pizzaFactory\Sauce\CreamSauce;
use pizzaFactory\Sauce\SauceStock;
// use pizzaFactory\Toppings\Meat\MeatInterface;
// use pizzaFactory\Toppings\Vegetable\VegetableInterface;
// use pizzaFactory\Toppings\ToppingsInterface;
// use pizzaFactory\Size;
use pizzaFactory\Size;
use pizzaFactory\Toppings\Cheese\Emmental;
use pizzaFactory\Toppings\Cheese\Mozzarella;
use pizzaFactory\Toppings\Cheese\Roquefort;
use pizzaFactory\Toppings\Meat\Beef;
use pizzaFactory\Toppings\ToppingsStock;

$toppingstock = new ToppingsStock();

$toppingstock->addCheese(new Emmental());
$toppingstock->addCheese(new Mozzarella());
$toppingstock->addCheese(new Roquefort());

$toppingstock->addMeat(new Beef());
var_dump($toppingstock);

$saucestock = new SauceStock();
$saucestock->addSauce(new CreamSauce());
var_dump($saucestock);

$doughsauce = new DoughStock();
$doughsauce->addDough(new SimpleDough());
var_dump($doughsauce);

$size = new Size();

$pizza = new Pizza("Pizza test", $toppingstock, $saucestock, $doughsauce, Size::SM);
dump($pizza);
