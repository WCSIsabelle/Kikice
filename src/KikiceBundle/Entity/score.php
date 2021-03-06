<?php

namespace KikiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="KikiceBundle\Repository\scoreRepository")
 */
class score
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
     * @ORM\Column(name="resultat", type="integer", nullable=true)
     */
    private $resultat;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="user")
     */
    private $user;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="categorie")
     */
    private $categorie;

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
     * Set resultat
     *
     * @param integer $resultat
     *
     * @return score
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return int
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set user
     *
     * @param \KikiceBundle\Entity\user $user
     *
     * @return score
     */
    public function setUser(\KikiceBundle\Entity\user $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \KikiceBundle\Entity\user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set categorie
     *
     * @param \KikiceBundle\Entity\categorie $categorie
     *
     * @return score
     */
    public function setCategorie(\KikiceBundle\Entity\categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \KikiceBundle\Entity\categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
