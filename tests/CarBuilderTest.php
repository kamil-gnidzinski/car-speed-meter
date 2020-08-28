<?php

namespace App\Tests;

use App\Service\Car\CarBuilder;
use App\Service\Car\Type\AudiB4A7;
use App\Service\Car\Type\OpelVectraLpg;
use PHPUnit\Framework\TestCase;

class CarBuilderTest extends TestCase
{
    public function testCreateCar()
    {
        $carBuilder = new CarBuilder();
        $this->assertInstanceOf(OpelVectraLpg::class, $carBuilder->createCar('OpelVectraLpg'));
        $this->assertInstanceOf(AudiB4A7::class, $carBuilder->createCar('AudiB4A7'));
    }

    public function testCreateOpelVectraLpg()
    {
        $carBuilder = new CarBuilder();
        $this->assertInstanceOf(OpelVectraLpg::class, $carBuilder->createCar('OpelVectraLpg'));
    }

    public function testCreateAudiB4A7()
    {
        $carBuilder = new CarBuilder();
        $this->assertInstanceOf(AudiB4A7::class, $carBuilder->createCar('AudiB4A7'));
    }
}
