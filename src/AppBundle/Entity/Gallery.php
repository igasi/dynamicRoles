<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Table(name="gallery")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GalleryRepository")
 */
class Gallery
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
     * @ORM\Column(name="GalleryName", type="string", length=255)
     */
    private $galleryName;

    /**
     * @var string
     *
     * @ORM\Column(name="RegCode", type="string", length=12)
     */
    private $regCode;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Album", inversedBy="galleries")
     * @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     */
    protected $album;

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
     * Set galleryName
     *
     * @param string $galleryName
     *
     * @return Gallery
     */
    public function setGalleryName($galleryName)
    {
        $this->galleryName = $galleryName;

        return $this;
    }

    /**
     * Get galleryName
     *
     * @return string
     */
    public function getGalleryName()
    {
        return $this->galleryName;
    }

    /**
     * Set album
     *
     * @param \AppBundle\Entity\Album $album
     *
     * @return Gallery
     */
    public function setAlbum(\AppBundle\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \AppBundle\Entity\Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set regCode
     *
     * @param string $regCode
     *
     * @return Gallery
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
}
