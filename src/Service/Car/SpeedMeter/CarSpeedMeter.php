<?php

namespace App\Service\Car\SpeedMeter;

use App\Service\Car\DataAdapter\DataAdapterInterface;

class CarSpeedMeter
{

    private $dataAdapter;
    private $samplesCount = 0;
    private $second = 0;
    private $stop = false;
    private $sum = 0;
    private $result = 0;
    /**
     * CarSpeedMeter constructor.
     */
    public function __construct(DataAdapterInterface $dataAdapter)
    {
        $this->dataAdapter = $dataAdapter;
    }

    public function getVelocity()
    {
        while($this->stop == false)
        {
            $sample = $this->dataAdapter->getVelocityData($this->second);
            $this->samplesCount++;
            $this->sum += $sample;
            $this->result = $this->sum/$this->samplesCount;
        }

    }
}