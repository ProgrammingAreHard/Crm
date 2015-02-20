<?php

namespace ProgrammingAreHard\Crm\Model\Entity;


class User
{
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function __toString()
    {
        return 'USER';
    }
}