<?php

namespace App\Repository;

use App\Entity\Reservationactivite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservationactivite>
 *
 * @method Reservationactivite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservationactivite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservationactivite[]    findAll()
 * @method Reservationactivite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class  ReservationactiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservationactivite::class);
    }

    public function add(   Reservationactivite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservationactivite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return   Reservationactivite[] Returns an array of    Reservationactivite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }


}