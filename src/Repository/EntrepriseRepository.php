<?php

namespace App\Repository;

use App\Entity\Entreprise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


/**
 * @method Entreprise|null find($id, $lockMode = null, $lockVersion = null)
 * @method Entreprise|null findOneBy(array $criteria, array $orderBy = null)
 * @method Entreprise[]    findAll()
 * @method Entreprise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntrepriseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entreprise::class);
    }

  

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
    public function entrepriseidequipe($entreprise)
    {
        $query = $this->_em->createQuery('SELECT e  FROM App:Equipe e 
       WHERE e.entreprise=?1')
            ->setParameter(1,$entreprise);    
        return $result = $query->getResult();
    }

    public function entrepriseidpersonnel($entreprise)
    {
        $query = $this->_em->createQuery('SELECT p  FROM App:Personnel p
       WHERE p.entreprise=?1')
            ->setParameter(1,$entreprise);    
        return $result = $query->getResult();
    }

    public function entreprisepage($id)
    {
        $query = $this->_em->createQuery('SELECT e  FROM App:Entreprise e 
       WHERE e.id=?1')
            ->setParameter(1,$id);    
        return $result = $query->getResult();
    }
    public function equipeentreprise($entreprise)
    {
        $query = $this->_em->createQuery('SELECT e FROM  App:Entreprise e, App:Equipe q
       WHERE e.id=q.entreprise
       AND q.id=?1
       ORDER BY   q.nom  ASC ')
            ->setParameter(1,$entreprise);    
        return $result = $query->getResult();
    }

    public function nombrepersonnel($entreprise)
    {
        $query = $this->_em->createQuery('SELECT count(p) FROM App:Personnel p, App:Entreprise e

       WHERE e.id=p.entreprise
       AND e.id=?1')
            ->setParameter(1,$entreprise);    
        return $result = $query->getSingleScalarResult();
    }
    public function nombreequipe($entreprise)
    {
    $query = $this->_em->createQuery('SELECT count(q) FROM App:Equipe q, App:Entreprise e

       WHERE e.id=q.entreprise
       AND e.id=?1')
            ->setParameter(1,$entreprise);    
        return $result = $query->getSingleScalarResult();
    }
}
