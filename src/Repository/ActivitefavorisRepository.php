<?php

namespace App\Repository;

use App\Entity\Activitefavoris;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Activitefavoris>
 *
 * @method Activitefavoris|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activitefavoris|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activitefavoris[]    findAll()
 * @method Activitefavoris[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivitefavorisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activitefavoris::class);
    }

    public function add(Activitefavoris $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Activitefavoris $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Activitefavoris[] Returns an array of Activitefavoris objects
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