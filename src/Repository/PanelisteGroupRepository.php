<?php

namespace App\Repository;

use App\Entity\PanelisteGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PanelisteGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method PanelisteGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method PanelisteGroup[]    findAll()
 * @method PanelisteGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanelisteGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PanelisteGroup::class);
    }


    public function findByIdPaneliste($idPaneliste)
    {
        $query = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.idPaneliste =:idPaneliste')
            ->setParameter('idPaneliste', $idPaneliste)
            ->getQuery();
        return $query->getResult()
            ;
    }


    public function getUser_idEtgroupe_id($user_id ,$paneliste_group_id)
    {
        $rawSql = "SELECT * FROM paneliste_groups WHERE user_id =$user_id AND paneliste_group_id =$paneliste_group_id";

        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        $stmt->execute([]);

        return count($stmt->fetchAll()) > 0 ? true : false;
    }


    // /**
    //  * @return PanelisteGroup[] Returns an array of PanelisteGroup objects
    //  */
    /*
    public function findByUser($value)
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
    public function findOneBySomeField($value): ?PanelisteGroup
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
