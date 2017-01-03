<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Story
 *
 * @ORM\Table(name="story")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StoryRepository")
 */
class Story
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
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetimetz")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetimetz", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Chapter", mappedBy="story")
     */
    private $chapters;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Tag")
     */
    private $tags;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Media")
     */
    private $mediaCollection;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Persona", mappedBy="story")
     */
    private $personae;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Location", mappedBy="story")
     */
    private $locations;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Resource", mappedBy="stories")
     */
    private $resources;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Draft", mappedBy="story")
     */
    private $drafts;


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
     * Set title
     *
     * @param string $title
     *
     * @return Story
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Story
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Story
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set chapters
     *
     * @param array $chapters
     *
     * @return Story
     */
    public function setChapters($chapters)
    {
        $this->chapters = $chapters;

        return $this;
    }

    /**
     * Get chapters
     *
     * @return array
     */
    public function getChapters()
    {
        return $this->chapters;
    }

    /**
     * Set tags
     *
     * @param array $tags
     *
     * @return Story
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set mediaCollection
     *
     * @param array $mediaCollection
     *
     * @return Story
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

    /**
     * Set characters
     *
     * @param array $personae
     *
     * @return Story
     */
    public function setPersonae($personae)
    {
        $this->personae = $personae;

        return $this;
    }

    /**
     * Get $personae
     *
     * @return array
     */
    public function getPersonae()
    {
        return $this->personae;
    }

    /**
     * Set locations
     *
     * @param array $locations
     *
     * @return Story
     */
    public function setLocations($locations)
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * Get locations
     *
     * @return array
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Set resources
     *
     * @param array $resources
     *
     * @return Story
     */
    public function setResources($resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Get resources
     *
     * @return array
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Set drafts
     *
     * @param array $drafts
     *
     * @return Story
     */
    public function setDrafts($drafts)
    {
        $this->drafts = $drafts;

        return $this;
    }

    /**
     * Get drafts
     *
     * @return array
     */
    public function getDrafts()
    {
        return $this->drafts;
    }
}

