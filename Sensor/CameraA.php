<?php

class CameraA extends Sensor implements ISensorA
{
    private $location;
    public function __construct($location)
    {
        $this->location = $location;
    }

    public function onDetect($callback)
    {
        $callback();
        $date = new DateTime()->format('Y-m-d');
        $messageRetour = "[$date] $this->location => Camera";
        foreach ($this->callbackList as $name => $callback) {
            if ($name === 'onDetect') {
                $callback($messageRetour);
            }
        }
        var_dump($messageRetour);
    }
}
