<?php

class TemperatureSensorA
{

    private $location;
    private $threashold;

    public function __construct($location, $threashold)
    {
        $this->location = $location;
        $this->threashold = $threashold;
    }

    public function onDetect($callback)
    {
        $callback();
        $date = new DateTime()->format('Y-m-d');
        $messageRetour = "[$date] $this->location -> TemperatureSensorA";
        var_dump($messageRetour);
    }
}
