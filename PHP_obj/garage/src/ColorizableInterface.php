<?php

namespace garage;

use garage\Colors\ColorInterface;

interface ColorizableInterface
{
    public function getColor(): ?ColorInterface;
    public function setColor(ColorInterface $color): ColorizableInterface;
}
