<?php

class User
{
    private $name;
    private $settings;

    public function __construct()
    {
        $this->settings = new Settings();
    }

    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    public function getSettings(): Settings
    {
        return $this->settings;
    }

    public function setSettings(Settings $settings): User
    {
        $this->settings = $settings;
        return $this;
    }
}
