<?php

namespace App\Repository;

use App\Entity\Mangaka;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mangaka|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mangaka|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mangaka[]    findAll()
 * @method Mangaka[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MangakaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mangaka::class);
    }

    // /**
    //  * @return Mangaka[] Returns an array of Mangaka objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mangaka
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
