<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\UserInterface as AppBundleUserInterface;
use AppBundle\UserDependentRole;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser implements AppBundleUserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=8)
     *
     * @Assert\NotBlank(message="Please enter your Registration Code.", groups={"Registration", "Profile"})
     *
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