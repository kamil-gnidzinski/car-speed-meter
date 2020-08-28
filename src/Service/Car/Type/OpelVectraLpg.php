<?php

namespace App\Service\Car\Type;

use App\EventListener\SpeedMeterListener;
use App\Service\Car\SpeedGauge\AnalogGauge;
use App\Service\Car\SpeedMeter\CarSpeedMeter;
use Symfony\Component\EventDispatcher\EventDispatcher;

class OpelVectraLpg extends CarAbstract
{
    public function __construct(CarSpeedMeter $carSpeedMeter, AnalogGauge $gauge)
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