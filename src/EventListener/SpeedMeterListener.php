<?php

namespace App\EventListener;

use App\Service\Car\SpeedMeter\SpeedMeterEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class SpeedMeterListener
{
    public function onSpeedMeterEvent(SpeedMeterEvent $event)
    {
       return $event->getAverageSpeed();
    }
}