<?php

namespace App\Service\Car\SpeedGauge;

class DigitalGauge implements CarSpeedGaugeAbstract
{
    private const MILE_IN_KM = 0.621371;

    public function getCurrentSpeedReading(int $speed)
    {
        return (int)round($speed * self::MILE_IN_KM);
    }
}