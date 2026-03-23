<?php

interface ISensorA
{
    public function __construct($position);
    public function onDetect($process);
}
