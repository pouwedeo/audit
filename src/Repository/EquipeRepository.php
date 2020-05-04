<?php

namespace App\Repository;

use App\Entity\Equipe;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


/**
 * @method Equipe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Equipe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Equipe[]    findAll()
 * @method Equipe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Equipe::class);
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

    public function equipeidproduir($equipe)
    {
        $query = $this->_em->createQuery('SELECT p FROM  App:Produir p
       WHERE p.equipe=?1 ')
            ->setParameter(1,$equipe);    
        return $result = $query->getResult();
    }
    public function equipeidtravail($equipe)
    {
        $query = $this->_em->createQuery('SELECT t FROM  App:TravaillerPersonnel t
       WHERE t.equipe=?1 ')
            ->setParameter(1,$equipe);    
        return $result = $query->getResult();
    }

    public function entrepriseeequipe($entreprise)
    {
        $query = $this->_em->createQuery('SELECT q FROM  App:Equipe q, App:Entreprise e 
       WHERE e.id=q.entreprise
       AND e.id=?1
       ORDER BY   q.nom  ASC ')
            ->setParameter(1,$entreprise);    
        return $result = $query->getResult();
    }
    public function nombrepersonnelequipe($equipe)
    {
        $query = $this->_em->createQuery('SELECT count(p) FROM App:Personnel p, App:Entreprise e, App:TravaillerPersonnel t

       WHERE p.id=t.personnel
       AND q.id=t.equipe
       AND q.id=?1')
            ->setParameter(1,$equipe);    
        return $result = $query->getSingleScalarResult();
    }
}
