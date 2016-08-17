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
}

