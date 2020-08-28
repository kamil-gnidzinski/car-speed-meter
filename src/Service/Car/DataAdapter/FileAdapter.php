<?php

namespace App\Service\Car\DataAdapter;

class FileAdapter implements DataAdapterInterface
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }


    public function getVelocityData(int $second)
    {
        $lines = file($this->filePath);
    }
}