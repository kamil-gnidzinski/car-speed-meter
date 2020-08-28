<?php

namespace App\Service\Car\SpeedGauge;

interface CarSpeedGaugeAbstract
{
    public function getCurrentSpeedReading(int $speed);
}