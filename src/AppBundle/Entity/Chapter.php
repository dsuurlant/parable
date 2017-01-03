<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapter
 *
 * @ORM\Table(name="chapter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChapterRepository")
 */
class Chapter
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Story", inversedBy="chapters")
     */
    private $story;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Persona")
     */
    private $personae;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Location")
     */
    private $locations;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Media")
     */
    private $mediaCollection;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Resource")
     */
    private $resources;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Tag")
     */
    private $tags;


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
     * @return Chapter
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
     * Set summary
     *
     * @param string $summary
     *
     * @return Chapter
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Chapter
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Chapter
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
     * @return Chapter
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
     * Set story
     *
     * @param integer $story
     *
     * @return Chapter
     */
    public function setStory($story)
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get story
     *
     * @return int
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * Set personae
     *
     * @param array $personae
     *
     * @return Chapter
     */
    public function setPersonae($personae)
    {
        $this->personae = $personae;

        return $this;
    }

    /**
     * Get personae
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
     * @return Chapter
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
     * Set mediaCollection
     *
     * @param array $mediaCollection
     *
     * @return Chapter
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
     * Set resources
     *
     * @param array $resources
     *
     * @return Chapter
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
     * Set tags
     *
     * @param array $tags
     *
     * @return Chapter
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
}

