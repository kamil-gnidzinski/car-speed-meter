<?php

namespace App\Service\Car;


use App\Service\Car\DataAdapter\RestAdapter;
use App\Service\Car\SpeedGauge\AnalogGauge;
use App\Service\Car\SpeedGauge\DigitalGauge;
use App\Service\Car\SpeedMeter\CarSpeedMeter;
use App\Service\Car\Type\AudiB4A7;
use App\Service\Car\Type\CarAbstract;
use App\Service\Car\Type\OpelVectraLpg;

class CarBuilder
{
    public function createCar(string $name): ?CarAbstract
    {
        switch ($name) {
            case 'OpelVectraLpg':
                $car = $this->createOpelVectraLpg();
                break;
            case 'AudiB4A7':
                $car = $this->createAudiB4A7();
                break;
        }
        return $car ?? null;
    }

    public function createOpelVectraLpg(): OpelVectraLpg
    {
        $gauge = new AnalogGauge();
        $dataAdapter = new RestAdapter();
        $speedMeter = new CarSpeedMeter($dataAdapter);
        return new OpelVectraLpg($speedMeter, $gauge);
    }

    public function createAudiB4A7(): AudiB4A7
    {
        $gauge = new DigitalGauge();
        $dataAdapter = new RestAdapter();
        $speedMeter = new CarSpeedMeter($dataAdapter);
        return new AudiB4A7($speedMeter, $gauge);
    }
}