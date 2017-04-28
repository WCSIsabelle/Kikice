<?php

namespace KikiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="KikiceBundle\Repository\questionRepository")
 */
class Question
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
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Categorie")
     */
    private $categorie;

    /**
     * @var string
     * @ORM\OneToMany(targetEntity="reponse", mappedBy="question")
     */
    private $reponses;

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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return question
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set categorie
     *
     * @param \KikiceBundle\Entity\categorie $categorie
     *
     * @return question
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

    public function __toString()
    {
        return $this->contenu;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reponse
     *
     * @param \KikiceBundle\Entity\Reponse $reponse
     *
     * @return Question
     */
    public function addReponse(\KikiceBundle\Entity\Reponse $reponse)
    {
        $this->reponses[] = $reponse;

        return $this;
    }

    /**
     * Remove reponse
     *
     * @param \KikiceBundle\Entity\Reponse $reponse
     */
    public function removeReponse(\KikiceBundle\Entity\Reponse $reponse)
    {
        $this->reponses->removeElement($reponse);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReponses()
    {
        return $this->reponses;
    }
}
