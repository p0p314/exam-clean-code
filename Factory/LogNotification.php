<?php

class LogNotification
{
    public function send($message)
    {
        var_dump("Log: $message");
    }
}
