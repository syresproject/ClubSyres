<?php

namespace App\Repository;

use App\Entity\LinkLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LinkLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method LinkLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method LinkLog[]    findAll()
 * @method LinkLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LinkLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LinkLog::class);
    }

    // /**
    //  * @return LinkLog[] Returns an array of LinkLog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LinkLog
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
