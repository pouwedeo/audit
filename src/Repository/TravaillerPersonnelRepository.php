<?php

namespace App\Repository;

use App\Entity\TravaillerPersonnel;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


/**
 * @method TravaillerPersonnel|null find($id, $lockMode = null, $lockVersion = null)
 * @method TravaillerPersonnel|null findOneBy(array $criteria, array $orderBy = null)
 * @method TravaillerPersonnel[]    findAll()
 * @method TravaillerPersonnel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TravaillerPersonnelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TravaillerPersonnel::class);
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


    public function entreprisePersonnel($entreprise)
    {
        $query = $this->_em->createQuery('SELECT p  FROM App:Personnel p, App:Entreprise e 
       WHERE e.id=p.entreprise
       AND e.id=?1
       ORDER BY   p.conteneure  ASC ')
            ->setParameter(1,$entreprise);    
        return $result = $query->getResult();
    }

    public function travailPersonnel($entreprise)
    {
        $query = $this->_em->createQuery('SELECT t  FROM App:TravaillerPersonnel t, App:Personnel p, App:Entreprise e 
       WHERE e.id=p.entreprise
       AND p.id= t.personnel
       AND e.id=?1 ')
            ->setParameter(1,$entreprise);    
        return $result = $query->getResult();
    }  

    public function equpuepersonnel($equipe,$personne)
    {
        $query = $this->_em->createQuery('SELECT t  FROM App:TravaillerPersonnel t
       WHERE t.equipe=?1
       AND t.personnel= ?2')
            ->setParameter(1,$equipe) ->setParameter(2,$personne);    
    
        return $result = $query->getResult();
    }  
}
