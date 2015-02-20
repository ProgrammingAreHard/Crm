<?php

namespace ProgrammingAreHard\Crm\Model\Repository;

use ProgrammingAreHard\Crm\Model\Entity\User;

interface UserRepository
{
    /**
     * @param $key
     * @return User
     */
    public function findByApiKey($key);
}