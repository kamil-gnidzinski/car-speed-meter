<?php

namespace App\Tests;

use App\Service\Car\SpeedGauge\AnalogGauge;
use PHPUnit\Framework\TestCase;

class AnalogGaugeTest extends TestCase
{
    public function testGetCurrentSpeedReading()
    {
        $analogGauge = new AnalogGauge();
        $this->assertEquals(12, $analogGauge->getCurrentSpeedReading(10));
        $this->assertEquals(82, $analogGauge->getCurrentSpeedReading(67));
        $this->assertEquals(0, $analogGauge->getCurrentSpeedReading(0));
        $this->assertEquals(270, $analogGauge->getCurrentSpeedReading(220));
        $this->assertIsInt($analogGauge->getCurrentSpeedReading(rand(1,100)));
    }
}
