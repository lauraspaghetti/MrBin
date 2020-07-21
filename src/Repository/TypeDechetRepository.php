<?php

namespace App\Repository;

use App\Entity\TypeDechet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TypeDechet|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeDechet|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeDechet[]    findAll()
 * @method TypeDechet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeDechetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeDechet::class);
    }

    public function getDistinctCategorie()
    {
        return $this->createQueryBuilder('type_dechet')
            //->groupBy("type_dechet.categorie")
            ->getQuery()
            ->getResult(); 
    }

    // /**
    //  * @return TypeDechet[] Returns an array of TypeDechet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeDechet
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
