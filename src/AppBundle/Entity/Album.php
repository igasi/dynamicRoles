<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


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
     * @ORM\OneToMany(targetEntity="Gallery", mappedBy="album")
     */
    protected $galleries;

    public function __construct()
    {
        $this->galleries = new ArrayCollection();
    }


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

    /**
     * Add gallery
     *
     * @param \AppBundle\Entity\Gallery $gallery
     *
     * @return Album
     */
    public function addGallery(\AppBundle\Entity\Gallery $gallery)
    {
        $this->galleries[] = $gallery;

        return $this;
    }

    /**
     * Remove gallery
     *
     * @param \AppBundle\Entity\Gallery $gallery
     */
    public function removeGallery(\AppBundle\Entity\Gallery $gallery)
    {
        $this->galleries->removeElement($gallery);
    }

    /**
     * Get galleries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGalleries()
    {
        return $this->galleries;
    }

    public function __toString() {
        return $this->albumName;
    }
}
