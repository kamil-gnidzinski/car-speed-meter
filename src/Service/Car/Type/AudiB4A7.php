<?php

namespace App\Service\Car\Type;

use App\Service\Car\SpeedGauge\DigitalGauge;
use App\Service\Car\SpeedMeter\CarSpeedMeter;

class AudiB4A7 extends CarAbstract
{
    public function __construct(CarSpeedMeter $carSpeedMeter, DigitalGauge $gauge)
    {
        parent::__construct($carSpeedMeter, $gauge);
    }

    public function getAverageSpeed()
    {
        $this->carSpeedMeter->getAverageSpeed();
    }

    public function getCurrentSpeedReading()
    {
        $this->gauge->getCurrentSpeedReading(1);
    }

}