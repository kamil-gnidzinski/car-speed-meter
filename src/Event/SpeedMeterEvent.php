<?php

namespace App\Service\Car\SpeedMeter;


use Symfony\Contracts\EventDispatcher\Event;

class SpeedMeterEvent extends Event
{
    public const NAME = 'new.speedMeter.data';

    protected $averageSpeed;

    public function __construct(int $averageSpeed)
    {
        $this->averageSpeed = $averageSpeed;
    }

    public function getAverageSpeed()
    {
        return $this->averageSpeed;
    }
}