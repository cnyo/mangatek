<?php

namespace App\Repository;

use App\Entity\MangaEditorCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MangaEditorCollection|null find($id, $lockMode = null, $lockVersion = null)
 * @method MangaEditorCollection|null findOneBy(array $criteria, array $orderBy = null)
 * @method MangaEditorCollection[]    findAll()
 * @method MangaEditorCollection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MangaEditorCollectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MangaEditorCollection::class);
    }

    // /**
    //  * @return MangaEditorCollection[] Returns an array of MangaEditorCollection objects
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
    public function findOneBySomeField($value): ?MangaEditorCollection
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
