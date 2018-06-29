<?php

namespace phphelp;

use phphelp\StringHelper;

class TextTransformer extends StringHelper
{

    private $text;

    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    public function shorten(int $length)
    {

    }
}
