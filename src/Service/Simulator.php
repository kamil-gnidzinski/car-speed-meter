<?php

namespace App\Service;

use App\Service\Car\CarBuilder;
use App\Service\Car\DataAdapter\RestAdapter;

class Simulator
{
    private $carBuilder;

    /**
     * Simulator constructor.
     */
    public function __construct(CarBuilder $carBuilder)
    {
        $this->carBuilder = $carBuilder;
    }

    public function simulateOpel()
    {
        $opel = $this->carBuilder->createCar('OpelVectraLpg');
        $second = 0;
        while ($second <= 842) {
            $speed = $opel->getAverageSpeed($second);
            $second += rand(1, 5);
            echo $opel->getCurrentSpeedReading($speed) .' degree on dashboard'.  PHP_EOL;
        }
    }

    public function simulateAudi()
    {
        $audi = $this->carBuilder->createCar('AudiB4A7');
        $second = 0;
        while ($second <= 842) {
            $speed = $audi->getAverageSpeed($second);
            $second += rand(1, 5);
            echo $audi->getCurrentSpeedReading($speed) .' MPH'. PHP_EOL;
        }
    }

}