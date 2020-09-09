<?php

namespace App\Repository;

use App\Entity\Insc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Insc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Insc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Insc[]    findAll()
 * @method Insc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Insc::class);
    }

    // /**
    //  * @return Insc[] Returns an array of Insc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Insc
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
