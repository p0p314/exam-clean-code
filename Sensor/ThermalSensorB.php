<?php

class ThermalSensorB extends Sensor
{

    public $position;
    public function __construct($position)
    {
        $this->position = $position;
    }

    public function triggerHeatSignature($process)
    {

        return json_encode($process());
    }
}
