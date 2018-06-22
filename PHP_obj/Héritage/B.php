<?php

include "Traits/Timestamp.php";

class B extends A// Bénéficie de l'ensemble de blocs publics de la classe A

{
    use Timestamp; // J'tuilise mon trait

    public $property2;

    public function methodC()
    {
        return __METHOD__;
    }

    public function methodD()
    {
        return $this->methodA(); // $this parce que la class a hérité des méthodes de la class A
    }

    public function methodE()
    {
        return $this->property1;
    }

    public function methodF()
    {
        return $this->pProtected;
    }
    public function methodG()
    {
        return $this->getPPrivate(); // Retourner la propriété privée
    }
}
