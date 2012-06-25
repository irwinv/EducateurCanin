<?php

namespace Patrick\ElevageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patrick\ElevageBundle\Entity\ImagesConcours
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ImagesConcours
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
     * @var string $img
     *
     * @ORM\Column(name="img", type="string", length=255)
     */
    private $img;

    /**
     * @var string $thumb
     *
     * @ORM\Column(name="thumb", type="string", length=255, nullable=true)
     */
    private $thumb;

	/**
     * @var string $concour
     *
     * @ORM\ManyToOne(targetEntity="Concours", inversedBy="imgconcours", cascade={"all"})
     * @ORM\JoinColumn(name="concour_id", referencedColumnName="id")
     */
    private $concour;


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
     * Set img
     *
     * @param string $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set concour
     *
     * @param Patrick\ElevageBundle\Entity\Concours $concour
     */
    public function setConcour(\Patrick\ElevageBundle\Entity\Concours $concour)
    {
        $this->concour = $concour;
    }

    /**
     * Get concour
     *
     * @return Patrick\ElevageBundle\Entity\Concours 
     */
    public function getConcour()
    {
        return $this->concour;
    }
}