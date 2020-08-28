<?php

namespace App\Service\Car\DataAdapter;

interface DataAdapterInterface
{
    public function getVelocityData(int $second);
}