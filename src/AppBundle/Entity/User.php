<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\UserInterface as AppBundleUserInterface;
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
     * @ORM\Column(type="string", length=12)
     *
     * @Assert\NotBlank(message="Please enter your Registration Code.", groups={"Registration", "Profile"})
     *
     */
    protected $regcode;


    public function __construct()
    {
        parent::__construct();

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
