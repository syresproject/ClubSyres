<?php

namespace App\Repository;

use App\Entity\PDeuxIns;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PDeuxIns|null find($id, $lockMode = null, $lockVersion = null)
 * @method PDeuxIns|null findOneBy(array $criteria, array $orderBy = null)
 * @method PDeuxIns[]    findAll()
 * @method PDeuxIns[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PDeuxInsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PDeuxIns::class);
    }

    // /**
    //  * @return PDeuxIns[] Returns an array of PDeuxIns objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PDeuxIns
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
