<?php

class CameraA implements ISensorA
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
        $messageRetour = "[$date] $this->location -> Camera";
        var_dump($messageRetour);
    }
}