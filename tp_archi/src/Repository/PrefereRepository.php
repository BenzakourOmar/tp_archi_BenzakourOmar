<?php

namespace App\Repository;

use App\Entity\Prefere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Prefere>
 *
 * @method Prefere|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prefere|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prefere[]    findAll()
 * @method Prefere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrefereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prefere::class);
    }

//    /**
//     * @return Prefere[] Returns an array of Prefere objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Prefere
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
