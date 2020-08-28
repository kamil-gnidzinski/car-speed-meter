<?php

namespace App\Repository;

use App\Entity\VelocityData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VelocityData|null find($id, $lockMode = null, $lockVersion = null)
 * @method VelocityData|null findOneBy(array $criteria, array $orderBy = null)
 * @method VelocityData[]    findAll()
 * @method VelocityData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VelocityDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VelocityData::class);
    }

    // /**
    //  * @return VelocityData[] Returns an array of VelocityData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VelocityData
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
