<?php

class Settings
{
    private $email;
    private $mobile;

    public function setEmail(string $email): Settings
    {
        $this->email = $email;
        return $this;
    }

    public function setMobile(string $mobile): Settings
    {
        $this->mobile = $mobile;
        return $this;
    }
}
