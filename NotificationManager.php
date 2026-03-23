<?php

class NotificationManager
{
    private $mode;
    private $email;
    private $discord;
    private $fileLog;
    private $sensorList = [];
    function __construct($sensorList)
    {
        $this->sensorList = $sensorList;

        foreach ($this->sensorList as $sensor) {
            if ($sensor instanceof Sensor) {
                $sensor->addEvent('onDetect',  function ($message) {
                    $notification = NotificationFactory::notify($this->mode);
                    $notification->send($message);
                });
            }
        }
    }

    public function setMode($mode)
    {
        $this->mode = $mode;
    }
    public function setEmail()
    {
        $this->email = 'Email';
    }

    public function setDiscord()
    {
        $this->discord = 'Discord';
    }
    public function setFileLog()
    {
        $this->fileLog = 'Log';
    }
}
