<?php

class Sensor
{
    public $callbackList = [];
    public function addEvent($name, $callback)
    {
        $this->callbackList[$name] = $callback;
    }

    public function prepare() {
        if()
    }
}