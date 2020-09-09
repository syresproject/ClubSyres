<?php

namespace App\Repository;

use App\Entity\HeaderHabit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HeaderHabit|null find($id, $lockMode = null, $lockVersion = null)
 * @method HeaderHabit|null findOneBy(array $criteria, array $orderBy = null)
 * @method HeaderHabit[]    findAll()
 * @method HeaderHabit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HeaderHabitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HeaderHabit::class);
    }

    // /**
    //  * @return HeaderHabit[] Returns an array of HeaderHabit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HeaderHabit
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
