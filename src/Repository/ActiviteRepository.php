<?php

namespace App\Repository;

use App\Entity\Activite;
use App\Entity\Activitefavoris;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Activite>
 *
 * @method Activite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activite[]    findAll()
 * @method Activite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activite::class);
    }

    public function add(Activite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Activite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Activite[] Returns an array of Activite objects
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


    public function isFavoriteForUser(Activite $activite, User $user): bool
    {
        // Récupérer l'activitefavoris correspondant à cette activité et à cet utilisateur
        $activiteFavoris = $this->createQueryBuilder('a')
            ->leftJoin('a.activitefavoriss', 'af')
            ->andWhere('af.activite = :activite')
            ->andWhere('af.user = :user')
            ->setParameter('activite', $activite)
            ->setParameter('user', $user)
            ->getQuery()
            ->getOneOrNullResult();

        // Vérifier si une réaction "love" existe pour cet utilisateur et cette activité
        return $activiteFavoris !== null;
    }

    public function findActiviteByName($noma)
    {
        $qb = $this->createQueryBuilder('a')
            ->where('a.noma LIKE :noma')
            ->setParameter('noma', '%' . $noma . '%');
        
        return $qb->getQuery()->getResult();
    }

}