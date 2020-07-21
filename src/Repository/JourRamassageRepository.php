<?php

namespace App\Repository;

use App\Entity\JourRamassage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method JourRamassage|null find($id, $lockMode = null, $lockVersion = null)
 * @method JourRamassage|null findOneBy(array $criteria, array $orderBy = null)
 * @method JourRamassage[]    findAll()
 * @method JourRamassage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JourRamassageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JourRamassage::class);
    }

    // /**
    //  * @return JourRamassage[] Returns an array of JourRamassage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JourRamassage
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
