<?php

namespace AppBundle;

use Symfony\Component\Security\Core\Role\RoleInterface;
use AppBundle\Entity\UserInterface;

class UserDependentRole implements RoleInterface
{
    private $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getRole()
    {
        return 'ROLE_' . strtoupper($this->user->getRegcode());
    }
}