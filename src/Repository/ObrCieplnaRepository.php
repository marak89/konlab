<?php

namespace App\Repository;

use App\Entity\ObrCieplna;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ObrCieplna>
 *
 * @method ObrCieplna|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObrCieplna|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObrCieplna[]    findAll()
 * @method ObrCieplna[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObrCieplnaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObrCieplna::class);
    }

    public function add(ObrCieplna $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ObrCieplna $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ObrCieplna[] Returns an array of ObrCieplna objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ObrCieplna
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
