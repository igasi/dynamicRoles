<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\UserDependentRole;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=8)
     */
    protected $regcode;


    public function __construct()
    {
        parent::__construct();

        $customRole = new UserDependentRole($this);

        $this->addRole('ROLE_USER');
        $this->addRole($customRole->getRole());

    }

    public function setRegcode($regcode)
    {
        $this->regcode = $regcode;
    }

    public function getRegcode()
    {
        return $this->regcode;
    }
}