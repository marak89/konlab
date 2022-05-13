<?php

namespace App\Repository;

use App\Entity\WlasnCHEM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WlasnCHEM>
 *
 * @method WlasnCHEM|null find($id, $lockMode = null, $lockVersion = null)
 * @method WlasnCHEM|null findOneBy(array $criteria, array $orderBy = null)
 * @method WlasnCHEM[]    findAll()
 * @method WlasnCHEM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WlasnCHEMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WlasnCHEM::class);
    }

    public function add(WlasnCHEM $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(WlasnCHEM $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return WlasnCHEM[] Returns an array of WlasnCHEM objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WlasnCHEM
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
