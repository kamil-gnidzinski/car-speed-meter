<?php

namespace App\Service\Car\Type;

use App\Service\Car\SpeedGauge\CarSpeedGaugeAbstract;
use App\Service\Car\SpeedMeter\CarSpeedMeter;

abstract class CarAbstract
{
    protected $carSpeedMeter;
    protected $gauge;

    abstract public function getAverageSpeed();

    abstract public function getCurrentSpeedReading();

    /**
     * CarAbstract constructor.
     * @param CarSpeedMeter $carSpeedMeter
     * @param CarSpeedGaugeAbstract $gauge
     */
    public function __construct(CarSpeedMeter $carSpeedMeter, CarSpeedGaugeAbstract $gauge)
    {
        $this->carSpeedMeter = $carSpeedMeter;
        $this->gauge = $gauge;
    }

    protected function stopSpeedMeter(): void
    {
        $this->carSpeedMeter->setStop(true);
    }

    public function getSpeedMeter(): CarSpeedMeter
    {
        return $this->carSpeedMeter;
    }

}