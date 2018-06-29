<?php

namespace phphelp;

class StringHelper
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }
    public function upper(): string
    {
        return strtoupper($this->str);
    }

    public function lower(): string
    {
        return strtolower($this->str);
    }

    public function cut($start, $length): string
    {
        return substr($this->str, $start, $length);
    }

    public function count(): int
    {
        return strlen($this->str);
    }
}
