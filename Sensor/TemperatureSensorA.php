<?php

class TemperatureSensorA extends Sensor
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
        $messageRetour = "[$date] $this->location :  => TemperatureSensorA";

        foreach ($this->callbackList as $name => $callback) {
            if ($name === 'onDetect') {
                $callback($messageRetour);
            }
        }
        var_dump($messageRetour);
    }
}
