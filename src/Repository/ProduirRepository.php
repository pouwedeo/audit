<?php

namespace App\Repository;

use App\Entity\Produir;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


/**
 * @method Produir|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produir|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produir[]    findAll()
 * @method Produir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produir::class);
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

    public function produirentreprise($entreprise)
    {
        $query = $this->_em->createQuery('SELECT p  FROM App:Produir p, App:Equipe q, App:Entreprise e 
       WHERE e.id=q.entreprise
       AND q.id= p.equipe
       AND e.id=?1 ')
            ->setParameter(1,$entreprise);    
        return $result = $query->getResult();
    }  

    public function equpueproduit($equipe,$produit)
    {
        $query = $this->_em->createQuery('SELECT p  FROM App:Produir p
       WHERE p.equipe=?1
       AND p.produit= ?2')
            ->setParameter(1,$equipe) ->setParameter(2,$produit);    
    
        return $result = $query->getResult();
    }  
}
