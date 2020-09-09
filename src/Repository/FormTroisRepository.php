<?php

namespace App\Repository;

use App\Entity\FormTrois;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FormTrois|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormTrois|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormTrois[]    findAll()
 * @method FormTrois[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormTroisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormTrois::class);
    }

    // /**
    //  * @return FormTrois[] Returns an array of FormTrois objects
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
    public function findOneBySomeField($value): ?FormTrois
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
