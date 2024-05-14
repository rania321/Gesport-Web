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

    /**
     * Retourne les réservations qui ont dépassé la date d'aujourd'hui.
     *
     * @return Reservationactivite[]|null
     */
    public function findArchiveReservations(): ?array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.datedebutr < :today')
            ->setParameter('today', new \DateTime('today'))
            ->getQuery()
            ->getResult();
    }

    /**
     * Retourne les réservations qui sont dans le futur.
     *
     * @return Reservationactivite[]|null
     */
    public function findFutureReservations(): ?array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.datedebutr > :today')
            ->setParameter('today', new \DateTime('today'))
            ->getQuery()
            ->getResult();
    }

    public function countTotalReservations(): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.idr)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findMostPopularHour(): ?array
    {
        return $this->createQueryBuilder('r')
            ->select('r.heurer', 'COUNT(r.heurer)')
            ->groupBy('r.heurer')
            ->orderBy('COUNT(r.heurer)', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function findClientFidele(): array
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r) as count', 'u.nomu as user')
            ->leftJoin('r.idu', 'u') // Utilisation de l'alias 'r' pour la réservation et 'u' pour l'utilisateur
            ->groupBy('u.idu')
            ->getQuery()
            ->getResult();
    }

}