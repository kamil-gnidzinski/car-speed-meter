<?php

namespace App\Tests;

use App\Service\Car\SpeedGauge\DigitalGauge;
use PHPUnit\Framework\TestCase;

class DigitalGaugeTest extends TestCase
{
    public function testGetCurrentSpeedReading()
    {
        $analogGauge = new DigitalGauge();
        $this->assertEquals(7, $analogGauge->getCurrentSpeedReading(12));
        $this->assertEquals(42, $analogGauge->getCurrentSpeedReading(67));
        $this->assertEquals(0, $analogGauge->getCurrentSpeedReading(0));
        $this->assertEquals(62, $analogGauge->getCurrentSpeedReading(100));
        $this->assertIsInt($analogGauge->getCurrentSpeedReading(rand(1,100)));
    }
}
