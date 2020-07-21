<?php

namespace App\Repository;

use App\Entity\BBBBBBBB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BBBBBBBB|null find($id, $lockMode = null, $lockVersion = null)
 * @method BBBBBBBB|null findOneBy(array $criteria, array $orderBy = null)
 * @method BBBBBBBB[]    findAll()
 * @method BBBBBBBB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BBBBBBBBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BBBBBBBB::class);
    }

    // /**
    //  * @return BBBBBBBB[] Returns an array of BBBBBBBB objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BBBBBBBB
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
