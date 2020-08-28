<?php

namespace App\Tests;

use App\Service\Car\DataAdapter\RestAdapter;
use PHPUnit\Framework\TestCase;

class RestAdapterTest extends TestCase
{
    public function testGetVelocityData()
    {
        $restAdapter =new RestAdapter();
        $this->assertIsInt($restAdapter->getVelocityData(10));
        $this->assertIsInt($restAdapter->getVelocityData(rand(1,100)));
        $this->assertEquals(0,$restAdapter->getVelocityData(0));
    }
}
