<?php

class A
{

    public $property1 = "property1";
    protected $pProtected = "protected";
    private $pPrivate = 1;

    public function methodA()
    {
        return __METHOD__;
    }

    public function methodB()
    {
        return __METHOD__;
    }

    public function getPPrivate()
    {
        return $this->pPrivate; // Pour la propriété privée
    }

}
