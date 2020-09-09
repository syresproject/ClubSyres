<?php

namespace App\Repository;

use App\Entity\FocusMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FocusMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method FocusMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method FocusMessage[]    findAll()
 * @method FocusMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FocusMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FocusMessage::class);
    }

    // /**
    //  * @return FocusMessage[] Returns an array of FocusMessage objects
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
    public function findOneBySomeField($value): ?FocusMessage
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
