<?php
namespace App\Service\Authentification;

use Symfony\Component\Security\Core\Security;
use App\Repository\UserRepository;

class SecurityService
{
    private $security;
    private $userRepository;

    public function __construct(Security $security, UserRepository $userRepository)
    {
        // Avoid calling getUser() in the constructor: auth may not
     
        $this->security = $security;
        $this->userRepository= $userRepository;
    }

    public function findCurrentUser()
    {
        // returns User object or null if not authenticated
        $user = $this->security->getUser();
        return $user;
    }


    public function findUserByLogin($value){
        $user= $this->userRepository->findOneByUsername($value);
        return $user;
    }
}