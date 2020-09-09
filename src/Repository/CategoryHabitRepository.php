<?php

namespace App\Repository;

use App\Entity\CategoryHabit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CategoryHabit|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryHabit|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryHabit[]    findAll()
 * @method CategoryHabit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryHabitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryHabit::class);
    }

    // /**
    //  * @return CategoryHabit[] Returns an array of CategoryHabit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoryHabit
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
