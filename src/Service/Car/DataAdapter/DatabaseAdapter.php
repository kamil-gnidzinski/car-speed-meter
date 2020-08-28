<?php

namespace App\Service\Car\DataAdapter;

use App\Entity\VelocityData;
use Doctrine\ORM\EntityManagerInterface;

class DatabaseAdapter implements DataAdapterInterface
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    public function getVelocityData(int $second)
    {
        return $this->em->getRepository(VelocityData::class)->findBy(['second' => $second]);
    }
}