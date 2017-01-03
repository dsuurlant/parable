<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="resource")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResourceRepository")
 */
class Resource
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
     * @ORM\Column(name="url", type="text", nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="authors", type="text", nullable=true)
     */
    private $authors;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publishedOn", type="datetime", nullable=true)
     */
    private $publishedOn;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Chapter")
     */
    private $chapters;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Story", inversedBy="resources")
     */
    private $story;

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
     * @return Resource
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
     * Set url
     *
     * @param string $url
     *
     * @return Resource
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Resource
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set authors
     *
     * @param string $authors
     *
     * @return Resource
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;

        return $this;
    }

    /**
     * Get authors
     *
     * @return string
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set publishedOn
     *
     * @param \DateTime $publishedOn
     *
     * @return Resource
     */
    public function setPublishedOn($publishedOn)
    {
        $this->publishedOn = $publishedOn;

        return $this;
    }

    /**
     * Get publishedOn
     *
     * @return \DateTime
     */
    public function getPublishedOn()
    {
        return $this->publishedOn;
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
}

