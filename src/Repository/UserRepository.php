<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function add(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function findOneByEmailu($emailu): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.emailu = :emailu')
            ->setParameter('emailu', $emailu)
            ->getQuery()
            ->getOneOrNullResult();
    }
    public function search(string $query): JsonResponse
    {
        $qb = $this->createQueryBuilder('u');
        $qb->andWhere($qb->expr()->orX(
            $qb->expr()->like('u.nomu', ':query'),
            $qb->expr()->like('u.prenomu', ':query'),
            $qb->expr()->like('u.emailu', ':query')
        ))
        ->setParameter('query', '%' . $query . '%');

        $users = $qb->getQuery()->getResult();

        if (!empty($users)) {
            $jsonData = [];
            foreach ($users as $user) {
                $jsonData[] = [
                    'idu' => $user->getIdu(),
                    'nomu' => $user->getNomu(),
                    'prenomu' => $user->getPrenomu(),
                    'emailu' => $user->getEmailu(),
                    'roleu' => $user->getRoleu(),
                ];
            }

            return new JsonResponse($jsonData);
        } else {
            return new JsonResponse([]);
        }
    }


//    /**
//     * @return User[] Returns an array of User objects
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