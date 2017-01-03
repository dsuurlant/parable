<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relationship
 *
 * @ORM\Table(name="relationship")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RelationshipRepository")
 */
class Relationship
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Persona", inversedBy="relationships")
     */
    private $personaPrimary;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Persona", inversedBy="relationships")
     */
    private $personaSecondary;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\RelationshipType", inversedBy="relationships")
     */
    private $relationshipType;
    
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
     * Get primary persona
     *
     * @return Persona
     */
    public function getPersonaPrimary()
    {
        return $this->personaPrimary;
    }

    /**
     * Set primary persona
     *
     * @param Persona $personaPrimary
     *
     * @return Relationship
     */
    public function setPersonaPrimary($personaPrimary)
    {
        $this->personaPrimary = $personaPrimary;

        return $this;
    }

    /**
     * Get secondary persona
     *
     * @return Persona
     */
    public function getPersonaSecondary()
    {
        return $this->personaSecondary;
    }

    /**
     * Set secondary persona
     *
     * @param Persona $personaSecondary
     *
     * @return Relationship
     */
    public function setPersonaSecondary($personaSecondary)
    {
        $this->personaSecondary = $personaSecondary;

        return $this;
    }

    /**
     * Set relationshipType
     *
     * @param \stdClass $relationshipType
     *
     * @return Relationship
     */
    public function setRelationshipType($relationshipType)
    {
        $this->relationshipType = $relationshipType;

        return $this;
    }

    /**
     * Get relationshipType
     *
     * @return \stdClass
     */
    public function getRelationshipType()
    {
        return $this->relationshipType;
    }
}

