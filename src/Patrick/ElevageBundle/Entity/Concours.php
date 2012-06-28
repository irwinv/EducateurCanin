<?php

namespace Patrick\ElevageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patrick\ElevageBundle\Entity\Chiens
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Patrick\ElevageBundle\Repository\ConcoursRepository")
 */
class Concours
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $titre
     *
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var integer $race
     *
     * @ORM\Column(name="race", type="integer")
     */
    private $race;

	/**
	* @ORM\OneToMany(targetEntity="ImagesConcours", mappedBy="concour", cascade={"all"})
	*
	*/
	private $imgconcours;

    public function __construct()
    {
        $this->imgconcours = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set race
     *
     * @param integer $race
     */
    public function setRace($race)
    {
        $this->race = $race;
    }

    /**
     * Get race
     *
     * @return integer
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Add imgconcours
     *
     * @param Patrick\ElevageBundle\Entity\ImagesConcours $imgconcours
     */
    public function addImagesConcours(\Patrick\ElevageBundle\Entity\ImagesConcours $imgconcours)
    {
        $this->imgconcours[] = $imgconcours;
    }

    /**
     * Get imgconcours
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getImgconcours()
    {
        return $this->imgconcours;
    }
}