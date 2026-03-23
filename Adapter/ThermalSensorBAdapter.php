<?php

class ThermalSensorBAdapter implements ISensorA
{
    private $sensorB;

    public function __construct($location)
    {
        $this->sensorB = new ThermalSensorB($location);
    }

    public function onDetect($callback)
    {
        $retour = json_decode($this->sensorB->triggerHeatSignature($callback));
        $messageRetour = "[$retour->date] $retour->sensor => $retour->detection";
        foreach ($this->sensorB->callbackList as $name => $callback) {
            if ($name === 'onDetect') {
                $callback($messageRetour);
            }
        }
        var_dump($messageRetour);
    }
}
