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

    public function getAverageSpeed()
    {
        while ($this->stop == false) {
            $sample = $this->dataAdapter->getVelocityData($this->second);
            $this->samplesCount++;
            $this->sum += $sample;
            $this->result = $this->sum / $this->samplesCount;
            $this->second += rand(0, 5);
        }

    }

    /**
     * @param int $samplesCount
     */
    public function setSamplesCount(int $samplesCount): void
    {
        $this->samplesCount = $samplesCount;
    }

    /**
     * @param int $second
     */
    public function setSecond(int $second): void
    {
        $this->second = $second;
    }

    /**
     * @param bool $stop
     */
    public function setStop(bool $stop): void
    {
        $this->stop = $stop;
    }

    /**
     * @param int $sum
     */
    public function setSum(int $sum): void
    {
        $this->sum = $sum;
    }

    /**
     * @param int $result
     */
    public function setResult(int $result): void
    {
        $this->result = $result;
    }
}