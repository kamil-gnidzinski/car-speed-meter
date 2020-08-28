<?php

namespace App\Service\Car\Type;

use App\Service\Car\SpeedGauge\AnalogGauge;
use App\Service\Car\SpeedMeter\CarSpeedMeter;

class OpelVectraLpg extends CarAbstract
{
    public function __construct(CarSpeedMeter $carSpeedMeter, AnalogGauge $gauge)
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