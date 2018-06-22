<?php

interface ColorizableInterface
{
    public function getColor(): ?ColorInterface;
    public function setColor(ColorInterface $color): ColorizableInterface;
}
