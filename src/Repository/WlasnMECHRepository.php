<?php

namespace App\Repository;

use App\Entity\WlasnMECH;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WlasnMECH>
 *
 * @method WlasnMECH|null find($id, $lockMode = null, $lockVersion = null)
 * @method WlasnMECH|null findOneBy(array $criteria, array $orderBy = null)
 * @method WlasnMECH[]    findAll()
 * @method WlasnMECH[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WlasnMECHRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WlasnMECH::class);
    }

    public function add(WlasnMECH $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(WlasnMECH $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return WlasnMECH[] Returns an array of WlasnMECH objects
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

//    public function findOneBySomeField($value): ?WlasnMECH
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
