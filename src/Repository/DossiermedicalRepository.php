<?php

namespace App\Repository;

use App\Entity\Dossiermedical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dossiermedical>
 *
 * @method Dossiermedical|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dossiermedical|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dossiermedical[]    findAll()
 * @method Dossiermedical[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DossiermedicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dossiermedical::class);
    }

    public function add(Dossiermedical $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dossiermedical $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dossiermedical[] Returns an array of Dossiermedical objects
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
