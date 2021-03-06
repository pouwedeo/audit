<?php

namespace App\Repository;

use App\Entity\TypeProbleme;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


/**
 * @method TypeProbleme|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeProbleme|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeProbleme[]    findAll()
 * @method TypeProbleme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeProblemeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeProbleme::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    /*  public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    } */

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function problemesysteme($probleme)
    {
        
        $query = $this->_em->createQuery('SELECT p  FROM App:SystemeSurveillance p
       WHERE p.typeprobleme =?1')
            ->setParameter(1,$probleme);    
        return $result = $query->getResult();
    }
}
