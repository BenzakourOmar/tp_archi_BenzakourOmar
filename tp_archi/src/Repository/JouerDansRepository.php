<?php

namespace App\Repository;

use App\Entity\JouerDans;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JouerDans>
 *
 * @method JouerDans|null find($id, $lockMode = null, $lockVersion = null)
 * @method JouerDans|null findOneBy(array $criteria, array $orderBy = null)
 * @method JouerDans[]    findAll()
 * @method JouerDans[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JouerDansRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JouerDans::class);
    }

//    /**
//     * @return JouerDans[] Returns an array of JouerDans objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('j.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?JouerDans
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
