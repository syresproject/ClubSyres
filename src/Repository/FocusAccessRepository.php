<?php

namespace App\Repository;

use App\Entity\FocusAccess;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FocusAccess|null find($id, $lockMode = null, $lockVersion = null)
 * @method FocusAccess|null findOneBy(array $criteria, array $orderBy = null)
 * @method FocusAccess[]    findAll()
 * @method FocusAccess[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FocusAccessRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FocusAccess::class);
    }

    // /**
    //  * @return FocusAccess[] Returns an array of FocusAccess objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FocusAccess
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
