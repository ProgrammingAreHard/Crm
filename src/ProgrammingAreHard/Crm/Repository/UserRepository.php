<?php

namespace ProgrammingAreHard\Crm\Repository;

use ProgrammingAreHard\Crm\Entity\User;

interface UserRepository
{
    /**
     * @param $key
     * @return User
     */
    public function findByApiKey($key);
}