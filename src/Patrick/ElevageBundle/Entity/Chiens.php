<?php

namespace Patrick\ElevageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patrick\ElevageBundle\Entity\Chiens
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Chiens
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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var varchar $sexe
     *
     * @ORM\Column(name="sexe", type="string", length="1")
     */
    private $sexe;

    /**
     * @var integer $chiot
     *
     * @ORM\Column(name="chiot", type="integer")
     */
    private $chiot;

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
	* @ORM\OneToMany(targetEntity="Images", mappedBy="chien", cascade={"all"})
	*
	*/
	private $img;

    public function __construct()
    {
        $this->img = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set chiot
     *
     * @param integer $chiot
     */
    public function setChiot($chiot)
    {
        $this->chiot = $chiot;
    }

    /**
     * Get chiot
     *
     * @return integer 
     */
    public function getChiot()
    {
        return $this->chiot;
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
     * Add img
     *
     * @param Patrick\ElevageBundle\Entity\Images $img
     */
    public function addImages(\Patrick\ElevageBundle\Entity\Images $img)
    {
        $this->img[] = $img;
    }

    /**
     * Get img
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getImg()
    {
        return $this->img;
    }
}