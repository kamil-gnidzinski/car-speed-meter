<?php

namespace App\Service\Car\SpeedGauge;

class AnalogGauge implements CarSpeedGaugeAbstract
{
    private const MAX_KM = '220';
    private const MAX_DEGREE = '270';
    private $kmInDegree;

    /**
     * AnalogGauge constructor.
     */
    public function __construct()
    {
        $this->kmInDegree = self::MAX_DEGREE/self::MAX_KM;
    }


    public function getCurrentSpeedReading(int $speed)
    {
        return (int) round($speed * $this->kmInDegree);
    }
}