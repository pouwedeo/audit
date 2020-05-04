<?php

namespace App\Repository;

use App\Entity\Etape;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


/**
 * @method Etape|null find($id, $lockMode = null, $lockVersion = null)
 * @method Etape|null findOneBy(array $criteria, array $orderBy = null)
 * @method Etape[]    findAll()
 * @method Etape[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtapeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etape::class);
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

    public function etapeutiliser($etape)
    {
        $query = $this->_em->createQuery('SELECT u FROM  App:MatiereUtiliser u
       WHERE u.etape=?1')
            ->setParameter(1,$etape);    
        return $result = $query->getResult();
    }
    public function etapeccp($etape)
    {
        $query = $this->_em->createQuery('SELECT i FROM  App:IdentificationccpDanger i
       WHERE i.Etape=?1')
            ->setParameter(1,$etape);    
        return $result = $query->getResult();
    } 
  
    public function etapesysteme($etape)
    {
        $query = $this->_em->createQuery('SELECT s FROM  App:SystemeSurveillance s
       WHERE s.etape=?1')
            ->setParameter(1,$etape);    
        return $result = $query->getResult();
    }
}
