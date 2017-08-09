<?php

namespace System\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidence
 *
 * @ORM\Table(name="incidence")
 * @ORM\Entity(repositoryClass="System\BackendBundle\Repository\IncidenceRepository")
 */
class Incidence
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
     * @var int
     *
     * @ORM\Column(name="code", type="integer")
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="incidence_date", type="date")
     */
    private $incidenceDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=255)
     */
    private $document;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param integer $code
     * @return Incidence
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set incidenceDate
     *
     * @param \DateTime $incidenceDate
     * @return Incidence
     */
    public function setIncidenceDate($incidenceDate)
    {
        $this->incidenceDate = $incidenceDate;

        return $this;
    }

    /**
     * Get incidenceDate
     *
     * @return \DateTime 
     */
    public function getIncidenceDate()
    {
        return $this->incidenceDate;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Incidence
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
     * Set document
     *
     * @param string $document
     * @return Incidence
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string 
     */
    public function getDocument()
    {
        return $this->document;
    }
}
