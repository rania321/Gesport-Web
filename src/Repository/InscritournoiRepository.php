<?php

namespace App\Repository;

use App\Entity\Inscritournoi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Inscritournoi>
 *
 * @method Inscritournoi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inscritournoi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inscritournoi[]    findAll()
 * @method Inscritournoi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscritournoiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inscritournoi::class);
    }

//    /**
//     * @return Inscritournoi[] Returns an array of Inscritournoi objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Inscritournoi
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
