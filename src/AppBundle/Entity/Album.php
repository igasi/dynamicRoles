<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="album")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlbumRepository")
 */
class Album
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="RegCode", type="string", length=8)
     */
    private $regCode;

    /**
     * @var string
     *
     * @ORM\Column(name="AlbumName", type="string", length=255)
     */
    private $albumName;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set regCode
     *
     * @param string $regCode
     *
     * @return Album
     */
    public function setRegCode($regCode)
    {
        $this->regCode = $regCode;

        return $this;
    }

    /**
     * Get regCode
     *
     * @return string
     */
    public function getRegCode()
    {
        return $this->regCode;
    }

    /**
     * Set albumName
     *
     * @param string $albumName
     *
     * @return Album
     */
    public function setAlbumName($albumName)
    {
        $this->albumName = $albumName;

        return $this;
    }

    /**
     * Get albumName
     *
     * @return string
     */
    public function getAlbumName()
    {
        return $this->albumName;
    }
}
