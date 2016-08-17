<?php

namespace AppBundle;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserDependentRole implements RoleInterface
{
    private $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getRole()
    {
        return 'ROLE_' . strtoupper($this->user->getUsername());
    }
}