<?php

namespace App\Repository;

use App\Entity\Scriptwriter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Scriptwriter|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scriptwriter|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scriptwriter[]    findAll()
 * @method Scriptwriter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScriptwriterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scriptwriter::class);
    }

    // /**
    //  * @return Scriptwriter[] Returns an array of Scriptwriter objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Scriptwriter
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
