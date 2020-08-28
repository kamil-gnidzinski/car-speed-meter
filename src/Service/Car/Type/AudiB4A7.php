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

    public function getAverageSpeed(int $second)
    {
        $this->carSpeedMeter->getAverageSpeed($second);
        return $this->carSpeedMeter->getResult();
    }

    public function getCurrentSpeedReading(int $speed)
    {
        return $this->gauge->getCurrentSpeedReading($speed);
    }

}