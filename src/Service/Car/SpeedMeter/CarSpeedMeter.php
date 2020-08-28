<?php

namespace App\Service\Car\SpeedMeter;

use App\Service\Car\DataAdapter\DataAdapterInterface;

class CarSpeedMeter
{

    private $dataAdapter;
    private $samplesCount = 0;
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

    public function getAverageSpeed($second)
    {
            $sample = $this->dataAdapter->getVelocityData($second);
            $this->samplesCount++;
            $this->sum += $sample;
            $this->result = $this->sum / $this->samplesCount;
    }

    /**
     * @param int $samplesCount
     */
    public function setSamplesCount(int $samplesCount): void
    {
        $this->samplesCount = $samplesCount;
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

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }
}