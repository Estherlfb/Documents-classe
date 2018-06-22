<?php

include "A.php";
include "B.php";
include "C.php";
// include "D.php";

$b = new B();
var_dump($b);
var_dump($b->methodA()); // De la classe A   A::methodA
var_dump($b->methodB()); // De la classe A
var_dump($b->methodC()); // De la classe B
var_dump($b->methodD()); // De la classe A
var_dump($b->methodE());
var_dump($b->methodF());
var_dump($b->methodG()); // Afficher la prop privée

$b->setLastUpdate("mardi");
var_dump($b->getLastUpdate());

$c = new C();
var_dump($c);
