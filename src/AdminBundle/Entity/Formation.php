<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="diplome", type="string", length=255)
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="ecole", type="string", length=255)
     */
    private $ecole;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;


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
     * Set diplome
     *
     * @param string $diplome
     *
     * @return Formation
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set ecole
     *
     * @param string $ecole
     *
     * @return Formation
     */
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * Get ecole
     *
     * @return string
     */
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return Formation
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }
}

