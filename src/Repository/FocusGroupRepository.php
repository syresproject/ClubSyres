<?php

namespace App\Repository;

use App\Entity\FocusGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FocusGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method FocusGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method FocusGroup[]    findAll()
 * @method FocusGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FocusGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FocusGroup::class);
    }

    // /**
    //  * @return FocusGroup[] Returns an array of FocusGroup objects
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
    public function findOneBySomeField($value): ?FocusGroup
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
