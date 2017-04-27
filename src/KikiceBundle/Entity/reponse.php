<?php

namespace KikiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="KikiceBundle\Repository\reponseRepository")
 */
class reponse
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
     * @ORM\Column(name="choix", type="string", length=255)
     */
    private $choix;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="integer")
     */
    private $statut;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="question")
     */
    private $question;

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
     * Set choix
     *
     * @param string $choix
     *
     * @return reponse
     */
    public function setChoix($choix)
    {
        $this->choix = $choix;

        return $this;
    }

    /**
     * Get choix
     *
     * @return string
     */
    public function getChoix()
    {
        return $this->choix;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     *
     * @return reponse
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return int
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set question
     *
     * @param \KikiceBundle\Entity\question $question
     *
     * @return reponse
     */
    public function setQuestion(\KikiceBundle\Entity\question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \KikiceBundle\Entity\question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
