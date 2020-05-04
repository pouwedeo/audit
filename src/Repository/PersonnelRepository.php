<?php

namespace App\Repository;

use App\Entity\Personnel;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


/**
 * @method Personnel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Personnel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Personnel[]    findAll()
 * @method Personnel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonnelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Personnel::class);
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
    public function perconnelentreprise($entreprise)
    {
        
        $query = $this->_em->createQuery('SELECT p  FROM App:Personnel p, App:Entreprise e 
       WHERE e.id=p.entreprise
       AND e.id=?1')
            ->setParameter(1,$entreprise);    
        return $result = $query->getResult();
    }

    public function perconnel($conteneure)
    {
        
        $query = $this->_em->createQuery('SELECT p  FROM App:Personnel p
       WHERE p.conteneure =?1')
            ->setParameter(1,$conteneure);    
        return $result = $query->getResult();
    }
    public function perconneltravail($personnel)
    {
        
        $query = $this->_em->createQuery('SELECT t  FROM App:TravaillerPersonnel t
       WHERE t.personnel =?1')
            ->setParameter(1,$personnel);    
        return $result = $query->getResult();
    }

    public function perconnelequipe($personnel)
    {
        
        $query = $this->_em->createQuery('SELECT e  FROM App:Equipe e
       WHERE e.personnel =?1')
            ->setParameter(1,$personnel);    
        return $result = $query->getResult();
    }

    public function perconnelesysteme($personnel)
    {
        
        $query = $this->_em->createQuery('SELECT s  FROM App:SystemeSurveillance s
       WHERE s.personnel =?1')
            ->setParameter(1,$personnel);    
        return $result = $query->getResult();
    }
}
