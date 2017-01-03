<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonaRepository")
 */
class Persona
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="middleName", type="string", length=255, nullable=true)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="fullName", type="string", length=255, nullable=true)
     */
    private $fullName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="datetime", nullable=true)
     */
    private $birthDate;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="origin", type="text", nullable=true)
     */
    private $origin;

    /**
     * @var string
     *
     * @ORM\Column(name="personality", type="text", nullable=true)
     */
    private $personality;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Relationship", mappedBy="personaPrimary")
     */
    private $primaryRelationships;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Relationship", mappedBy="personaSecondary")
     */
    private $secondaryRelationships;

    /**
     * @var array
     *
     * @ORM\Column(name="media", type="array", nullable=true)
     */
    private $media;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Persona
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     *
     * @return Persona
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Get middleName
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Persona
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return Persona
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Persona
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Persona
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set origin
     *
     * @param string $origin
     *
     * @return Persona
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set personality
     *
     * @param string $personality
     *
     * @return Persona
     */
    public function setPersonality($personality)
    {
        $this->personality = $personality;

        return $this;
    }

    /**
     * Get personality
     *
     * @return string
     */
    public function getPersonality()
    {
        return $this->personality;
    }

    /**
     * Get primary relationships
     *
     * @return array
     */
    public function getPrimaryRelationships()
    {
        return $this->primaryRelationships;
    }

    /**
     * Set primary relationships
     *
     * @param array $primaryRelationships
     * @return Persona
     */
    public function setPrimaryRelationships($primaryRelationships)
    {
        $this->primaryRelationships = $primaryRelationships;

        return $this;
    }

    /**
     * Get secondary relationships
     *
     * @return array
     */
    public function getSecondaryRelationships()
    {
        return $this->secondaryRelationships;
    }

    /**
     * Set secondary relationships
     * @param array $secondaryRelationships
     * @return Persona
     */
    public function setSecondaryRelationships($secondaryRelationships)
    {
        $this->secondaryRelationships = $secondaryRelationships;

        return $this;
    }


    /**
     * Set media
     *
     * @param array $media
     *
     * @return Persona
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return array
     */
    public function getMedia()
    {
        return $this->media;
    }
}

