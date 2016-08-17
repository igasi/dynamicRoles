<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\UserInterface as BaseUserInterface;

interface UserInterface extends BaseUserInterface
{

    public function setRegcode($regcode);

    public function getRegcode();
}