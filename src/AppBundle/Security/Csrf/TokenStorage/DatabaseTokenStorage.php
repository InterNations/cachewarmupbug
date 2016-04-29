<?php
namespace AppBundle\Security\Csrf\TokenStorage;

use AppBundle\Entity\Test;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;

class DatabaseTokenStorage implements TokenStorageInterface
{
    public function __construct(EntityManagerInterface $em)
    {
        $proxy = $em->getReference(Test::class, 123);
    }

    public function getToken($tokenId)
    {
    }

    public function setToken($tokenId, $token)
    {
    }

    public function removeToken($tokenId)
    {
    }

    public function hasToken($tokenId)
    {
    }
}

