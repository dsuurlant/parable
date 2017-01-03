<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaType
 *
 * @ORM\Table(name="media_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MediaTypeRepository")
 */
class MediaType
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Media", mappedBy="mediaType")
     */
    private $mediaCollection;

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
     * Set name
     *
     * @param string $name
     *
     * @return MediaType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mediaCollection
     *
     * @param array $mediaCollection
     *
     * @return MediaType
     */
    public function setMediaCollection($mediaCollection)
    {
        $this->mediaCollection = $mediaCollection;

        return $this;
    }

    /**
     * Get mediaCollection
     *
     * @return array
     */
    public function getMediaCollection()
    {
        return $this->mediaCollection;
    }
}

