<?php

trait Timestamp
{
    protected $last_update;

    public function getlastUpdate()
    {
        return $this->last_update;
    }

    public function setLastUpdate($last_update)
    {
        $this->last_update = $last_update;
    }

}
