<?php

namespace ProgrammingAreHard\Crm\Repository;

use ProgrammingAreHard\Crm\Entity\User;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class InMemoryUserRepository implements UserRepository, UserProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function findByApiKey($key)
    {
        return new User();
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername($username)
    {
        return $username === "foobar" ? new User() : null;
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user)
    {
        throw new UnsupportedUserException();
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass($class)
    {
        return $class === User::CLASS;
    }
}